<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class myFavorites extends Module
{
    public function __construct()
    {
        $this->name = 'myFav';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Anthony';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My Favorites');
        $this->description = $this->l(' Permet aux utilisateurs d\'ajouter des produits à une liste de favoris.');

        $this->confirmUninstall = $this->l('
        Êtes-vous sur de vouloir désinstaller?');
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() &&
        $this->registerHook('header') &&
        $this->registerHook('displayProductListFunctionalButtons') &&
        $this->registerHook('displayProductButtons') &&
        $this->registerHook('displayCustomerAccount') && 
        $this->createFavoritesTable();
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->deleteFavoritesTable();
    }

    private function createFavoritesTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'myFav` (
            `id_favorite` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `id_customer` INT(10) UNSIGNED NOT NULL,
            `id_product` INT(10) UNSIGNED NOT NULL,
            `date_add` DATETIME NOT NULL,
            PRIMARY KEY (`id_favorite`),
            KEY `id_customer` (`id_customer`),
            KEY `id_product` (`id_product`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';
    
        return Db::getInstance()->execute($sql);
    }

    private function deleteFavoritesTable()
    {
        $sql = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'myFav`;';
        return Db::getInstance()->execute($sql);
    }

    public function hookDisplayProductListFunctionalButtons($params)
    {
        
        $id_product = (int)$params['product']['id_product'];
        
        
        $this->context->smarty->assign([
            'id_product' => $id_product,
        ]);
        
        return $this->display(__FILE__, 'views/templates/hook/addtofavoritesbutton.tpl');
    }
    

    public function hookHeader()
{
    $this->context->controller->registerJavascript(
        'module-myFav-js', 
        'modules/'.$this->name.'/views/js/myFav.js',
        [
            'position' => 'bottom', 
            'priority' => 150, 
        ]
    );
}

public function getFavoritesListForCustomer($id_customer)
{
    $sql = new DbQuery();
    $sql->select('*');
    $sql->from('myFav', 'f');
    $sql->where('f.id_customer = ' . (int)$id_customer);

    $results = Db::getInstance()->executeS($sql);

    $favorites = [];
    foreach ($results as $result) {
        $product = new Product((int)$result['id_product'], false, $this->context->language->id);
        $link = $this->context->link->getProductLink($product);

        $favorites[] = [
            'id_product' => (int)$result['id_product'],
            'name' => $product->name,
            'link' => $link,
        ];
    }
}
}
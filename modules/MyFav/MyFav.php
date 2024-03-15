<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyFav extends Module
{
    public function __construct()
    {
        //  propriétés du module
        $this->name = 'MyFav';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Anthony';
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My Favorites');
        $this->description = $this->l(' Permet aux utilisateurs d\'ajouter des produits à une liste de favoris.');

        $this->confirmUninstall = $this->l('
        Êtes-vous sur de vouloir désinstaller?');
    }

    // Méthode d'installation
    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }
        // Enregistrement du module et des hooks  
        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('displayProductListFunctionalButtons') &&
            $this->registerHook('displayProductButtons') &&
            $this->createFavoritesTable();//créa table des favoris

    }

    // Méthode de désinstallation
    public function uninstall()
    {
        return parent::uninstall() && $this->deleteFavoritesTable();
    }
    // Crée la table des favoris dans bdd
    private function createFavoritesTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'MyFav` (
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

    // Supprime la table des favoris
    private function deleteFavoritesTable()
    {
        $sql = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'MyFav`;';
        return Db::getInstance()->execute($sql);
    }

    // Hook pour ajouter un bouton fav dans le detail produit
    public function hookDisplayProductListFunctionalButtons($params)
    {
        $this->context->smarty->assign('id_product', $params['product']['id_product']);
        return $this->display(__FILE__, 'views/templates/hook/addtofavoritesbutton.tpl');
    }


    // Inclus le JS
    public function hookHeader()
    {
        $this->context->controller->registerJavascript(
            'module-MyFav-js',
            'modules/' . $this->name . '/views/js/MyFav.js',
            [
                'position' => 'bottom',
                'priority' => 150,
            ]
        );
    }

     // Méthode pour récup la liste des fav d'un client
    public function getFavoritesListForCustomer($id_customer)
    {
        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('MyFav', 'f');
        $sql->where('f.id_customer = ' . (int) $id_customer);

        $results = Db::getInstance()->executeS($sql);

        $favorites = [];
        foreach ($results as $result) {
            $product = new Product((int) $result['id_product'], false, $this->context->language->id);
            $link = $this->context->link->getProductLink($product);

            $favorites[] = [
                'id_product' => (int) $result['id_product'],
                'name' => $product->name,
                'link' => $link,
            ];
        }
    }
    //Méthode hook pour ajouter btn
    public function hookDisplayProductButtons($params)
    {
        if (!isset($params['product'])) {
            return;
        }

        $this->context->smarty->assign([
            'id_product' => (int) $params['product']['id_product'],
        ]);

        return $this->display(__FILE__, 'views/templates/hook/addtofavoritesbutton.tpl');
    }


}
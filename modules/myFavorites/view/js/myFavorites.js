document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.add-to-favorites-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var idProduct = this.getAttribute('data-id-product');
            var url = 'index.php?fc=module&module=myFav&controller=favorites&action=add&id_product=' + idProduct;
            
            fetch(url, { method: 'POST' })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        alert('Produit ajouté aux favoris!');
                    } else {
                        alert('Erreur lors de l\'ajout du produit aux favoris.');
                    }
                });
        });
    });
});

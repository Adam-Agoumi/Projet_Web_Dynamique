Vue.component('creation', {
    template: `
    
        <div class="container">
            <h1>Ajout d'un livre</h1>
            <p>Veuillez remplir ce formulaire pour ajouter un livre.</p>
            <hr>
            
            <label for="Titre"><b>Titre</b></label>
            <input type="text" placeholder="Les milles et une nuits" name="Titre" id="Titre" required>
            
            <label for="Date de Publication"><b>Date de Publication</b></label>
            <br>
            <input type="Date"  name="Date de Publication" id="Date de Publication" required>
            <br>
            <br>
            <label for="Editeur"><b>Editeur</b></label>
            <br>
            <input type="text" placeholder="Gallimard" name="Editeur" id="Editeur" required>
            
            <label for="Collection"><b>Collection </b></label>
            <br>
            <input type="text" placeholder="Fantastique" name="Collection" id="Collection" required>
            <br>

            <label for="Edition"><b>Edition</b></label>
            <input type="text" placeholder="classique" name="Edition" id="Edition" required>

        

            <p>En ajoutant ce livre, vous adhérez à nos <a href="#">Conditions d'Utilisation</a></p>
            <button type="submit" class="Creationbtn">Ajouter</button>
            <br>
            <p>Vous cherchez un livre? <a href="../../Layout/searchForm.php">Cherhcer</a>.</p>
        </div>
    `
})

var Creation = new Vue({
    el: "#creation-form"
})
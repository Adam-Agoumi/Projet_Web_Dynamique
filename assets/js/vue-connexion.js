Vue.component('register', {
    template: `
    
        <div class="container">
            <h1>Creation de compte</h1>
            <p>Veuillez remplir ce formulaire pour creer un compte.</p>
            <hr>

            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="exemple@gmail.com" name="email" id="email" required>

            <label for="psw"><b>Mot de Passe</b></label>
            <input type="password" placeholder="MotDePasse" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repetez le mot de passe</b></label>
            <input type="password" placeholder="MotDePasse" name="psw-repeat" id="psw-repeat" required>
            <hr>

            <p>En créant ce compte, vous adhérez à nos <a href="#">Conditions d'Utilisation</a></p>
            <button type="submit" class="registerbtn">Creation</button>
            <br>
            <p>Vous avez déjà un compte chez nous? <a href="../../Layout/login.php">Login</a>.</p>
        </div>
    `
})

var register = new Vue({
    el: "#register-form"
})

Vue.component('login', {
    template: `
        <div class="container">
            <h1>Connexion</h1>
            <p>Veuillez remplir ce formulaire pour vous connecter.</p>
            <hr>

            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="exemple@gmail.com" name="email" id="email" required>

            <label for="psw"><b>Mot de Passe</b></label>
            <input type="password" placeholder="MotDePasse" name="psw" id="psw" required>
            <hr>

            <button name="LoginButton" type="submit" class="registerbtn">Connexion</button>
            <br>
            <p>Vous n'avez pas de compte chez nous? <a href="../../Layout/register.php">Création de compte.</a>.</p>
        </div>
    `
})

var login = new Vue({
    el: "#login-form"
})
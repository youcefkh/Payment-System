<h3>1- Création des Traits </h3>
<p>La création des traits StripeTrait et PaypalTrait qui contiennent les fonctions stripePaymentProcess, stripeGetPayment, paypalPaymentProcess et paypalGetPayment. Ces traits sont créés dans le répertoire app/Traits.</p>

<h3>2- Création de la Classe de Paiement </h3>
<p>Créer une classe de paiement PaymentProcessor qui utilise les traits StripeTrait et PaypalTrait.</p>
<p>La classe PaymentProcessor implémente deux méthodes "processPayment" et "getPaymentDetails" et utilise les deux traits précédents</p>
<p>la méthode publique appelée processPayment prend quatre paramètres en entrée : $provider, $amount, $currency, et $cardNumber.

La fonction vérifie la valeur de la variable $provider et exécute une logique de traitement de paiement différente en fonction de cette valeur. Si $provider est égal à 'stripe', elle appelle la méthode stripePaymentProcess. Si $provider est égal à 'paypal', elle appelle la méthode paypalPaymentProcess avec les mêmes paramètres.

Si $provider n'est ni 'stripe' ni 'paypal', elle lance une exception avec le message "Méthode de paiement non prise en charge."

Toutes les exceptions générées pendant l'exécution du code sont capturées dans un bloc try-catch. Si une exception est capturée, le message d'erreur de l'exception est renvoyé.</p>
<p>La meme logique est appliqué dans la méthode publique getPaymentDetails</p>

<h3>3- Utilisation dans le Contrôleur</h3>
<p>Utiliser la classe PaymentProcessor dans notre contrôleur PaymentController pour effectuer des paiements et récupérer des informations.</p>
<p>Dans la méthode processPayment et getPaymentDetails du controlleur on crée une instance de la classe PaymentProcessor et on retourne la méthode correspondante</p>
<p>dans la méthode payment on simule un checkout en récupérant les données entrées par l'utilisateur, on fait une validation de ces données là grace à la méthode rules qui se trouve dans la classe PaymentRequest, si toutes les données sont valides on procede au paiement grace à la méthode processPayment puis on retourne les détails du paiement grace à la méthode getPaymentDetails</p>
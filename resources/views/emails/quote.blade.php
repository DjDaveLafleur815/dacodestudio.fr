<h2>💼 Nouvelle demande de devis reçue :</h2>

<p><strong>Nom :</strong> {{ $name }}</p>
<p><strong>Email :</strong> {{ $email }}</p>
<p><strong>Type de projet :</strong> {{ $project_type }}</p>
<p><strong>Budget estimé :</strong> {{ $budget ?: 'Non précisé' }}</p>
<p><strong>Délai souhaité :</strong> {{ $deadline ?: 'Non précisé' }}</p>

<hr>

<p><strong>Message du client :</strong></p>
<p>{{ $user_message }}</p>

<hr>
<p>— D-A Code Studio | Formulaire de devis</p>

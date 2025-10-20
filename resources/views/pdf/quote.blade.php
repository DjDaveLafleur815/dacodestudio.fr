<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        @page { margin: 40px; }
        body {
            font-family: DejaVu Sans, sans-serif;
            background-color: #f9f9f9;
            color: #222;
        }

        /* ---- HEADER ---- */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #007BFF;
            padding-bottom: 8px;
            margin-bottom: 25px;
        }
        .logo { width: 110px; }
        .company-info {
            text-align: right;
            font-size: 12px;
            color: #0A0A1A;
        }

        h1 {
            text-align: center;
            color: #007BFF;
            font-size: 26px;
            margin-bottom: 20px;
        }

        /* ---- SECTIONS ---- */
        .section {
            background: #fff;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 15px;
            box-shadow: 0 0 10px rgba(0,123,255,0.1);
        }

        .section-title {
            color: #007BFF;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 8px;
            border-bottom: 1px solid #007BFF;
            padding-bottom: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 6px;
        }
        th {
            background-color: #007BFF;
            color: #fff;
            padding: 8px;
            font-size: 13px;
        }
        td {
            border: 1px solid #007BFF;
            padding: 8px;
            font-size: 13px;
        }

        /* ---- SIGNATURE ---- */
        .signature-block {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .signature-left {
            font-size: 12px;
            color: #555;
        }
        .signature-right {
            text-align: right;
        }
        .signature-right img {
            width: 120px;
            margin-bottom: 5px;
        }
        .signature-right strong {
            color: #007BFF;
            font-size: 13px;
        }

        /* ---- CGV ---- */
        .conditions {
            margin-top: 30px;
            font-size: 11px;
            line-height: 1.4;
            color: #555;
            background: #eef3ff;
            border-left: 3px solid #007BFF;
            padding: 10px 15px;
        }

        /* ---- FOOTER ---- */
        .footer {
            text-align: center;
            font-size: 10px;
            color: #777;
            margin-top: 35px;
            border-top: 2px solid #007BFF;
            padding-top: 8px;
        }
    </style>
    <title></title>
</head>
<body>

<div class="header">
    <img src="{{ public_path('images/logo.png') }}" class="logo" alt="Logo D-A Code Studio">
    <div class="company-info">
        <strong>D-A Code Studio</strong><br>
        Développement Web, Mobile & IoT<br>
        Heuilley-Sur-Saône — Bourgogne Franche-Comté<br>
        <a href="https://dacodestudio.fr" style="color:#007BFF;text-decoration:none;">www.dacodestudio.fr</a>
    </div>
</div>

<h1>💼 Devis n°{{ $quote->id }}</h1>

<div class="section">
    <div class="section-title">Client</div>
    <p>
        <strong>Nom :</strong> {{ $quote->name }}<br>
        <strong>Email :</strong> {{ $quote->email }}
    </p>
</div>

<div class="section">
    <div class="section-title">Informations sur le projet</div>
    <table>
        <tr>
            <th>Type de projet</th>
            <th>Budget estimé</th>
            <th>Délai souhaité</th>
            <th>Statut</th>
        </tr>
        <tr>
            <td>{{ $quote->project_type }}</td>
            <td>{{ $quote->budget ?? 'Non précisé' }}</td>
            <td>{{ $quote->deadline ?? 'Non précisé' }}</td>
            <td>{{ $quote->status }}</td>
        </tr>
    </table>
</div>

<div class="section">
    <div class="section-title">Description du projet</div>
    <p>{{ $quote->user_message }}</p>
</div>

<div class="signature-block">
    <div class="signature-left">
        <p>Fait à Heuilley-Sur-Saône, le {{ $quote->created_at->format('d/m/Y') }}</p>
        <p>Validité du devis : <strong>30 jours à compter de cette date</strong></p>
    </div>

    <div class="signature-right">
        <img src="{{ public_path('images/logo.png') }}" alt="Signature D-A Code Studio">
        <strong>David ANTOINE</strong><br>
        Gérant & Développeur Web, Mobile et IoT<br>
        D-A Code Studio
    </div>
</div>

<div class="conditions">
    <strong>Conditions générales :</strong><br>
    Le devis inclut le développement, les tests et la mise en ligne. Toute modification substantielle
    du cahier des charges pourra faire l’objet d’un avenant. Un acompte de 30 % peut être demandé à la signature.
    Le paiement du solde s’effectue à la livraison ou à la mise en production du projet.
</div>

<div class="footer">
    © {{ date('Y') }} D-A Code Studio — « L’intelligence du bâtiment, propulsée par le code. »
</div>

</body>
</html>

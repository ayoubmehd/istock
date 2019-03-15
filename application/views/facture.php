<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: black;
    }
	h1{
	color:black;
	font-family:italic;
	font-size:60px;
	text-shadow:3px 2px 5px green;}
	.information{
	color:blue;}
	.information{
	color:blue;
	}
	.total{
	color:black;
	font-size:23px;
	}
	.ligne{
	color:orange;
	font-size:20px;}
	.cmd{
	color:gray;}
	
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box .information table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
				<h1><center>I-STOCK</center></h1>
                </td>
            </tr>
            
            <tr class="information">
                <td>
                    <table>
                            <td>
                                Cin: <?php echo $Client[0]->CinC ?><br>
                                Nom: <?php echo $Client[0]->NomC ?><br>
                                Prenom: <?php echo $Client[0]->PrenomC ?><br>
							    Email: <?php echo $Client[0]->EmailC ?><br>
								Adresse: <?php echo $Client[0]->Adressc ?><br>
								Tel: <?php echo $Client[0]->TeleC ?><br>
								Sexe: <?php echo $Client[0]->SexC ?><br>
								Reseaux social: <?php echo $Client[0]->ResSoC ?><br>
								Remarque: <?php echo $Client[0]->RemarqueC ?><br>
                            </td>
							
							<td>
							Numereaux:
							<br>
							Adresse:
							<br>
							Tel:
							<br>
							Ville:
							<br>
							Pays:
							<br>
							Fax:
							<br>
							Reseaux social:
							<br>
							Date de creation:
							<br>
							User:
							<br>
							Remarque:
							</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <table border="4">
			<tr>
			<td colspan='4' class='ligne'><center>Ligne de commande</center></td></tr>
			<tr class='cmd'>
                <td><center>
                    REFERENCE</center>
                </td>
				<td><center>
                QUENTITE </center> </td>
				<td><center>PRIX HT</center></td>
                <td><center>
                    PRIX TTC</center>
                </td>
            </tr>
            <?php

                $totalHT = 0;

                $totalTTC = 0;

                foreach($LigneVent as $value):
                
            ?>
                <tr>
                    <?php

                        $totalHT += $value->PrixHT * $value->Qtt;

                        $totalTTC += $value->PrixTTC * $value->Qtt;

                    ?>
                    <td><?php echo $value->id ?></td>
                    <td class="qtt"><?php echo $value->Qtt ?></td>
                    <td class="prixht"><?php echo ($value->PrixHT * $value->Qtt) ?></td>
                    <td class="prixttc"><?php echo ($value->PrixTTC * $value->Qtt) ?></td>
                </tr>
            <?php endforeach; ?>
			
            </table>
			<table>
            <tr class='total'>
                <td>
                    TOTAL HORS TAXE: <span id='totalHT'><?php echo $totalHT ?></span>
                <br>
				
				    TVA: <span id='TVA'><?php echo ($totalTTC - $totalHT) ?></span>
				<br>
				
				    TOTAL TTC: <span id='totalTTC'><?php echo $totalTTC ?></span>
				
				</td>
                
        
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body {
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background: #f5f7fa;
    margin: 0;
    padding: 20px;
}

.container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.product-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: 0.3s;
    position: relative;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.12);
}

.product-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.product-info {
    padding: 15px;
}

.product-title {
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 10px;
    color: #333;
}

.product-price {
    font-size: 20px;
    color: #27ae60;
    font-weight: bold;
}

.product-button {
    display: block;
    text-align: center;
    margin-top: 12px;
    padding: 10px;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    transition: 0.3s;
}

.product-button:hover {
    background: linear-gradient(135deg, #43e97b, #38f9d7);
}

/* Etiket (indirim vs) */
.badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: #ff4757;
    color: #fff;
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 20px;
}
	</style>
</head>
<body>
	<?php 
	include("baglanti.php") ?>
<div class="container">
    

<?php 
 $kategoriler = $pdo->query("SELECT * FROM kategoriler",PDO::FETCH_ASSOC);
 foreach ($kategoriler as $katagori) {
 	echo '<div class="product-card">
      
        <img src="resimler/'.$katagori['resim'].'" class="product-image" alt="'.$katagori['urun'].'">
        
        <div class="product-info">
            <h3 class="product-title">'.$katagori['urun'].'</h3>
           
            <a href="#" class="product-button">Kategoriye git</a>
        </div>
    </div>';
 }
 ?>
    

  
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Corner Metsakulma - Tilaus</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding-top: 110px;
            background-image: url('bg-1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.20);
            z-index: -1;
        }
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(37, 150, 190, 0.97);
            color: white;
            padding: 10px 15px;
            text-align: center;
            box-sizing: border-box;
            min-height: 110px;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .menu-item {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .header h1 {
            font-size: 1.4rem;
            margin: 8px 0;
            line-height: 1.2;
        }
        .header p {
            margin: 8px 0;
            font-size: 1rem;
            white-space: nowrap;
            overflow-x: auto;
        }
        .whatsapp-btn {
            display: block;
            width: 75%;
            max-width: 250px;
            margin: 5px auto;
            padding: 5px 5px;
            background: #25D366;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            cursor: pointer;
            border: none;
        }
        .whatsapp-btn:hover {
            transform: scale(1.02);
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 10px 20px 40px;
        }
        .menu-category {
            margin: 25px 0;
            padding-bottom: 20px;
            border-bottom: 2px solid #ddd;
        }
        .menu-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            padding: 15px;
            margin: 15px 0;
            gap: 20px;
        }
        .item-info {
            flex: 1;
        }
        .size-container {
            display: flex;
            gap: 25px;
            align-items: center;
        }
        .size-option {
            text-align: center;
        }
        .price {
            color: #c41e3a;
            font-weight: bold;
            margin: 5px 0;
        }
        .quantity-input {
            width: 60px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        @media (max-width: 480px) {
            body { padding-top: 100px; }
            .header { min-height: 100px; padding: 8px 10px; }
            .header h1 { font-size: 1.2rem; }
            .header p { font-size: 0.9rem; }
            .whatsapp-btn { font-size: 1rem; padding: 12px 15px; }
            .menu-item { flex-direction: column; align-items: flex-start; }
            .size-container { width: 100%; justify-content: space-between; }
        }
            .delivery-options {
            text-align: center;
            margin: 10px 0;
        }
        .delivery-options label {
            margin: 0 15px;
            font-size: 1.1rem;
        }
        .delivery-options input[type="radio"] {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pizza Corner Metsakulma</h1>
        <p>📞 Toimituspuhelin: <a href="tel:358466367424" style="color:white;">358466367424</a></p>
        <div class="delivery-options">
            <label>
                <input type="radio" name="deliveryType" value="pickup" required> Nouto
            </label>
            <label>
                <input type="radio" name="deliveryType" value="delivery" required> Kotiinkuljetus (+€4)
            </label>
        </div>
        <p><button class="whatsapp-btn" onclick="prepareOrder()">💬 Tilaa WhatsAppissa!</button></p>
    </div>

    <div class="container">
        <br>
        <br>
        <br>

        <!-- Pizzat (1–29) -->
        <div class="menu-category">
            <h2>Pizzat</h2>
            
            <div class="menu-item">
                <div class="item-info">
                    <h3>1. MARGHERITA</h3>
                    <small>(tomaatti, mozzarella, basilika)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MARGHERITA" data-size="Norm" data-price="10.50">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€17.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MARGHERITA" data-size="Perhe" data-price="17.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>2. BOLOGNESE</h3>
                    <small>(bolognese-kastike)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="BOLOGNESE" data-size="Norm" data-price="10.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€17.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="BOLOGNESE" data-size="Perhe" data-price="17.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>3. FRANCESCANA</h3>
                    <small>(pizzasuikale, herkkusieni)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€9.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FRANCESCANA" data-size="Norm" data-price="9.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€17.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FRANCESCANA" data-size="Perhe" data-price="17.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>4. FRUTTI DI MARE</h3>
                    <small>(tonnikala, simpukka, katkarapu)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FRUTTI DI MARE" data-size="Norm" data-price="10.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€17.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FRUTTI DI MARE" data-size="Perhe" data-price="17.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>5. AMERICANO</h3>
                    <small>(pizzasuikale, ananas, sinihomejusto)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="AMERICANO" data-size="Norm" data-price="10.50">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€18.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="AMERICANO" data-size="Perhe" data-price="18.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>6. VEGETARIANA</h3>
                    <small>(herkkusieni, paprika, sipuli, oliivi)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="VEGETARIANA" data-size="Norm" data-price="10.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="VEGETARIANA" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>7. MEXICANO</h3>
                    <small>(pepperoni, jalapeno, paprika)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MEXICANO" data-size="Norm" data-price="10.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MEXICANO" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>8. SUPER PIZZA</h3>
                    <small>(meetvursti, pekoni, pizzasuikale)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SUPER PIZZA" data-size="Norm" data-price="10.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SUPER PIZZA" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>9. CHIKEN HAWAI</h3>
                    <small>(paahdettu broileri, ananas, aurajusto)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="CHIKEN HAWAI" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="CHIKEN HAWAI" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>10. OPERA SPECIAL</h3>
                    <small>(pizzasuikale, tonnikala, meetvursti)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€10.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="OPERA SPECIAL" data-size="Norm" data-price="10.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="OPERA SPECIAL" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>11. DILINGER</h3>
                    <small>(meetvursti, pizzasuikale, bolognese-kastike, sipuli)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="DILINGER" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="DILINGER" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>12. QUATTRO</h3>
                    <small>(pizzasuikale, katkarapu, herkkusieni, paprika)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="QUATTRO" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="QUATTRO" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>13. JULIA</h3>
                    <small>(pizzasuikale, ananas, katkarapu, sinihomejuusto)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="JULIA" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="JULIA" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>14. ROMEO</h3>
                    <small>(meetvursti, ananas, katkarapu, sinuhomejuusto)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ROMEO" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ROMEO" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>15. EMPIRE SPECIAL</h3>
                    <small>(katkarapu, meetvursti, pizzasuik, tuplaj., sipuli, vs)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="EMPIRE SPECIAL" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="EMPIRE SPECIAL" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>16. KUMMISETÄ</h3>
                    <small>(pizzasuikale, herkkusieni, katkarapu, tuplajuusto, vs)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="KUMMISETÄ" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="KUMMISETÄ" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>17. PEOOERONI</h3>
                    <small>(pepperoni, sipuli, jalapeno, vihrea chili, kebabliha)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="PEOOERONI" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="PEOOERONI" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>18. ITALIA</h3>
                    <small>(meetvursti, sipuli, oliivi, katkarapu, aurajuusto)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ITALIA" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ITALIA" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>19. FORMAGGIO</h3>
                    <small>(edamjuusto, aurajuusto, salaattijuusto, mozzarellaj)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FORMAGGIO" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FORMAGGIO" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>20. FETA PIZZA</h3>
                    <small>(pepperoni, salaattij., kana, herkkusieni, punasipuli)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FETA PIZZA" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FETA PIZZA" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>21. SMETANA PIZZA</h3>
                    <small>(kebabliha, salaattijuusto, jalapeno, sipuli, tomatti, smetana, valkosipuli)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SMETANA PIZZA" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SMETANA PIZZA" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>22. SUOMI SPECIAL</h3>
                    <small>(pizzas., meetvursti, ananas, katkarapu, sinihomej.)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SUOMI SPECIAL" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€19.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SUOMI SPECIAL" data-size="Perhe" data-price="19.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>23. BEEF CRISPY</h3>
                    <small>(pizzas., meetvursti, paprika, sinihomej., ananas)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="BEEF CRISPY" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="BEEF CRISPY" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>24. HANGOVER</h3>
                    <small>(tulinen salsakastike, mozarella, meetvursti, pekoni, maustekurkku, jalapeno)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="HANGOVER" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="HANGOVER" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>25. SISILIAN TULINEN</h3>
                    <small>(meetvursti, sipuli, katkarapu, jalapeno, paprika)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SISILIAN TULINEN" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SISILIAN TULINEN" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>26. TEXAN STYLE BBQ</h3>
                    <small>(kana, pekoni, mozarella, sipuli, bbq-kastike)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="TEXAN STYLE BBQ" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="TEXAN STYLE BBQ" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>27. METSAKULMA</h3>
                    <small>(meetvursti, pepperoni, pizzasikale, pekoni, rucola, talon majoneesi. valkosipulikastike)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="METSAKULMA" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="METSAKULMA" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>28. FINLANDIA</h3>
                    <small>(meetvursti, pizzasuikale, katkarapu, sinihomejuusto)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FINLANDIA" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="FINLANDIA" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>29. KUTEN HALUATTE</h3>
                    <small>(4 eri täyettä valintasi mukaan+kastike: kebabliha, meetvursti, pepperoni, pekoni, kana, chorizomakkara, katkarapu, tonnikala, simpukka, mozzarella, salaattijuusto, sinihomejuusto,ananas, paprika, jalapeno, tomaatti, oliivi, buffalo, punasipuli, paholaisenhilo, bolognese-kastike, BBQ curry kastike, valkosipuli, talon majoneesi)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€11.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="KUTEN HALUATTE" data-size="Norm" data-price="11.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€20.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="KUTEN HALUATTE" data-size="Perhe" data-price="20.00">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>LISÄTÄYTTEET</h3>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€1.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="LISÄTÄYTTEET" data-size="Norm" data-price="1.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">€2.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="LISÄTÄYTTEET" data-size="Perhe" data-price="2.00">
                    </div>
                </div>
            </div>

            <!-- Add more pizza items following the same pattern -->
        </div>

        <!-- Special Pizzat (30–40) -->
        <div class="menu-category">
            <h2>Special Pizzat</h2>
            
            <div class="menu-item">
                <div class="item-info">
                    <h3>30. SPICE VEGE</h3>
                    <small>(jalapeno, tomaatti, mozzarella, kapris, sipuli)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SPICE VEGE" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="SPICE VEGE" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>31. ITALIANO CLASSICO</h3>
                    <small>(pepperoni, pizzasuikale, herkkusieni, katkarapu, oliivi, mozzarella, rucola)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ITALIANO CLASSICO" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ITALIANO CLASSICO" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>32. ANNABELLA</h3>
                    <small>(feta, pesto, vuohenjuusto, rucola, tuore paprika)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ANNABELLA" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ANNABELLA" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>33. PIZZA LA MARGERITTA</h3>
                    <small>(buffalo mozzarella, kirsikkatomatti, rucola)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="PIZZA LA MARGERITTA" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="PIZZA LA MARGERITTA" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>34. ZORPAS</h3>
                    <small>(vuohenjuusto, paholaisenhillo, oliivi, punasipuli, rucola)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ZORPAS" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">20.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="ZORPAS" data-size="Perhe" data-price="20.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>35. MIESTEN VEGA-PIZZA</h3>
                    <small>(bolognese-kastike, meetvursti, pepperoni, kinkku, kana, Kebab, pekoni)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MIESTEN VEGA-PIZZA" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">20.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MIESTEN VEGA-PIZZA" data-size="Perhe" data-price="20.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>36. BACCO</h3>
                    <small>(mozzarella, aurajuusto, herkkusieni, pizzas., rucola)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="BACCO" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="BACCO" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>37. RUCOLA PIZZA</h3>
                    <small>(tuore rucola, buffalo mozzarella, punasipuli, kirsikkatomatti)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="RUCOLA PIZZA" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="RUCOLA PIZZA" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>38. MOZZARELLA-PESTO</h3>
                    <small>(kevyt-mozzarella, pesto, kirsikkatomatti, rucola, vs)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MOZZARELLA-PESTO" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="MOZZARELLA-PESTO" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>39. PICCANTE</h3>
                    <small>(chorizomakkara, pepperoni, permesaanijuusto, smetana, jalapeno, bolognese-kastike)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="PICCANTE" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="PICCANTE" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="item-info">
                    <h3>40. CHORIZOMAKKARAPIZZA</h3>
                    <small>(chorizomakkara, katkarapu, ananas, paholaisenhillo, mozzarella, bbq-kastike)</small>
                </div>
                <div class="size-container">
                    <div class="size-option">
                        <div>Norm (32cm)</div>
                        <div class="price">€13.00</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="CHORIZOMAKKARAPIZZA" data-size="Norm" data-price="13.00">
                    </div>
                    <div class="size-option">
                        <div>Perhe (45cm)</div>
                        <div class="price">18.50</div>
                        <input type="number" class="quantity-input" min="0" value="0" 
                               data-item="CHORIZOMAKKARAPIZZA" data-size="Perhe" data-price="18.50">
                    </div>
                </div>
            </div>

            <!-- Add more special pizzas -->
        </div>

       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>KANARUOAT</h2>

        <div class="menu-item">
            <div class="item-info">
                <h3>C1. RANSKALAISILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="RANSKALAISILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>C2. LOHKOPERUNOILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="LOHKOPERUNOILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>C3. KERMAPERUNOILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KERMAPERUNOILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>C4. RISILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="RISILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>C5. KERMAPERUNOILLA</h3>
                <small>(kana, salaatti, tomaatti, sipuli, turkinp., curryk.)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KERMAPERUNOILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>C6. KANARULLA</h3>
                <small>(kana, salaatti, tomaatti, sipuli, turkinp., curryk.)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KANARULLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>C7. KANA CALZONE</h3>
                <small>(kana, ananas, juusto, pepperoni, paprika, currykastike, salaatti, salaattikastike.)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KANA CALZONE" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>

        <!-- Add more special pizzas -->
        </div>

       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>KEBAB/KANAKEBAB</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>K1. ISKENDAR KEBAB</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="ISKENDAR KEBAB" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K2. KEBAB RANSKALAISILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KEBAB RANSKALAISILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K3. KEBAB RIISILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KEBAB RIISILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K4. KEBAB LOHKOPERUNOILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KEBAB LOHKOPERUNOILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K5. KEBAB SALAATILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KEBAB SALAATILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K6. LEIPAKEBAB</h3>
                <small>(salaatti, tomaatti, turkinpippuri, sipuli(extra salaatti - tai aurajusto +1 e))</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="LEIPAKEBAB" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K7. RULLAKEBAB</h3>
                <small>(salaatti, tomaatti, turkinpippuri, sipuli(extra salaatti - tai aurajusto +1 e))</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="RULLAKEBAB" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K8. KEBAB CALZONE VIKING BOUT</h3>
                <small>(kebab, punasipuli, jalapeno, salaattijuusto, tomaatti, salaatti, salaattikastike))</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KEBAB CALZONE VIKING BOUT" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>K9. MEGAKEBAB</h3>
                <small>(kebabliha, kanakebab, salaatti, ranskalaiset))</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="MEGAKEBAB" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <!-- Add more special pizzas -->
        </div>


       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>BURGERIT</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>B1. HAMPURILAINEN</h3>
                <small>(salaatti, naudan tayslihapihvi, cheddarjuusto)</small>
            </div>
            <div class="size-container">
                <div class="size-option">
                    <div>Hamp.</div>
                    <div class="price">€9.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="HAMPURILAINEN" data-size="Norm" data-price="9.00">
                </div>
                <div class="size-option">
                    <div>Ateria</div>
                    <div class="price">€11.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="Metsäkrouvi" data-size="Perhe" data-price="11.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>B2. KERROSHAMPURILAINEN</h3>
                <small>(1 x naudan tayslihapihvi, 2 x cheddarjuusto, salaatti, tomaatti, suolakurkku)</small>
            </div>
            <div class="size-container">
                <div class="size-option">
                    <div>Hamp.</div>
                    <div class="price">€10.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="KERROSHAMPURILAINEN" data-size="Norm" data-price="10.00">
                </div>
                <div class="size-option">
                    <div>Ateria</div>
                    <div class="price">€12.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="KERROSHAMPURILAINEN" data-size="Perhe" data-price="12.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>B3. KING BURGER</h3>
                <small>(3 x naudan tayslihapihvi, 2 x cheddarjuusto, pekoni, salaatti, tomaatti, suolakurkku)</small>
            </div>
            <div class="size-container">
                <div class="size-option">
                    <div>Hamp.</div>
                    <div class="price">€13.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="KING BURGER" data-size="Norm" data-price="13.00">
                </div>
                <div class="size-option">
                    <div>Ateria</div>
                    <div class="price">€15.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="KING BURGER" data-size="Perhe" data-price="15.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>B4. TUPLAJUUSTOBURGER</h3>
                <small>(naudan tayslihapihvi, 2 x cheddarjuusto, salaatti, tomaatti, suolakurkku)</small>
            </div>
            <div class="size-container">
                <div class="size-option">
                    <div>Hamp.</div>
                    <div class="price">€10.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="TUPLAJUUSTOBURGER" data-size="Norm" data-price="10.00">
                </div>
                <div class="size-option">
                    <div>Ateria</div>
                    <div class="price">€12.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="TUPLAJUUSTOBURGER" data-size="Perhe" data-price="12.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>B5. KANA BBQ</h3>
                <small>(kanapihvi, cheddarjuusto, salaatti, tomaatti, suolakurkku)</small>
            </div>
            <div class="size-container">
                <div class="size-option">
                    <div>Hamp.</div>
                    <div class="price">€8.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="KANA BBQ" data-size="Norm" data-price="8.00">
                </div>
                <div class="size-option">
                    <div>Ateria</div>
                    <div class="price">€10.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="KANA BBQ" data-size="Perhe" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>B6. HALLOUMIJUUSTOHAMPURILAINEN</h3>
                <small>(naudan tayslihapihvi, heddarjuusto, halloumijuusto, salaatti, paholaisenhillo)</small>
            </div>
            <div class="size-container">
                <div class="size-option">
                    <div>Hamp.</div>
                    <div class="price">€11.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="HALLOUMIJUUSTOHAMPURILAINEN" data-size="Norm" data-price="11.00">
                </div>
                <div class="size-option">
                    <div>Ateria</div>
                    <div class="price">€13.00</div>
                    <input type="number" class="quantity-input" min="0" value="0" 
                           data-item="HALLOUMIJUUSTOHAMPURILAINEN" data-size="Perhe" data-price="13.00">
                </div>
            </div>
        </div>
        
        <!-- Add more special pizzas -->
        </div>

       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>FALAFEL</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>F1. PITA FALAFEL</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€9.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="PITA FALAFEL" data-size="Norm" data-price="9.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>F2. RIISILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="RIISILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>F3. RANSKALAISILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="RANSKALAISILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>F4. LOHKOPERUNOILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="LOHKOPERUNOILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>F5. FALAFELRULLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="FALAFELRULLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>F6. FALAFEL SALATTILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="FALAFEL SALATTILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>F7. KERMAPERUNOILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KERMAPERUNOILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>F8. VALKOSIPULIKERMAPERUNOILLA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="VALKOSIPULIKERMAPERUNOILLA" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>

        <!-- Add more special pizzas -->
        </div>        

       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>GRILLI</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>G1. MAKKARAPERUNAT (tuplamakkaralla +2e)</h3>
                <small>(suolakurkku, salaatti, sinappi, majoneesi, ketsuppi, kurkkusalaatti.)</small>
                <small>(Ranskalaisill tai lohkoperunoilla)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€10.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="MAKKARAPERUNAT" data-size="Norm" data-price="10.00">
                </div>
            </div>
        </div>
        <!-- Add more special pizzas -->
        </div>  

       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>SALAATTIT sis. tuore leipa</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>S1. KANASALAATTI</h3>
                <small>(kurkkusalaatti, ananas, paprika, tomaatti, salaattijuusto, halloumijuusto, balsamico)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€11.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="KANASALAATTI" data-size="Norm" data-price="11.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>S2. JUUSTOSALAATTI</h3>
                <small>(kurkkusalaatti, ananas, paprika, tomaatti, salaattijuusto, halloumijuusto, balsamico)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€11.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="JUUSTOSALAATTI" data-size="Norm" data-price="11.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>S3. TONNIKALASALAATTI</h3>
                <small>(kurkkusalaatti, ananas, paprika, tomaatti, salaattijuusto, halloumijuusto, balsamico)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€11.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="TONNIKALASALAATTI" data-size="Norm" data-price="11.00">
                </div>
            </div>
        </div>

        <!-- Add more special pizzas -->
        </div>

       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>UUTUUDET</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>CORNER KEBAB</h3>
                <small>(lohkoperunat, ranskalaiset, aurabearnaisekastike)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€12.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="CORNER KEBAB" data-size="Norm" data-price="12.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>RULLAKEBAB-AURA</h3>
                <small>(bearnaisekastikkella)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€12.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="RULLAKEBAB-AURA" data-size="Norm" data-price="12.00">
                </div>
            </div>
        </div>

        <!-- Add more special pizzas -->
        </div>

       <!-- Special Pizzat (30–40) -->
       <div class="menu-category">
        <h2>LASTEN ATERIAT</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>LASTEN PIZZA</h3>
                <small>(3 taytetta)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€8.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="LASTEN PIZZA" data-size="Norm" data-price="8.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>LASTEN kebab-annos</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€8.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="LASTEN kebab-annos" data-size="Norm" data-price="8.00">
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="item-info">
                <h3>NUGETTIATERIA</h3>
                <small>(5 nugettia, 2 sipulirengasta, 2 mozzarellatikkua)</small>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€8.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="NUGETTIATERIA" data-size="Norm" data-price="8.00">
                </div>
            </div>
        </div>        

        <!-- Add more special pizzas -->
        </div>

      <!-- Special Pizzat (30–40) -->
      <div class="menu-category">
        <h2>JUOMAT</h2>
        
        <div class="menu-item">
            <div class="item-info">
                <h3>1,5 L JUOMA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€5.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="1,5 L JUOMA" data-size="Norm" data-price="5.00">
                </div>
            </div>
        </div>        
        <div class="menu-item">
            <div class="item-info">
                <h3>0,5 L JUOMA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€4.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="0,5 L JUOMA" data-size="Norm" data-price="4.00">
                </div>
            </div>
        </div>  
        <div class="menu-item">
            <div class="item-info">
                <h3>0,33 L JUOMA</h3>
            </div>
            <div class="size-container">
                <div class="size-option" style="display: flex; align-items: center; justify-content: flex-end;">
                    <div style="margin-right: 10px;">
                        <div class="price">€3.00</div>
                    </div>
                    <input type="number" class="quantity-input" min="0" value="0"
                           data-item="0,33 L JUOMA" data-size="Norm" data-price="3.00">
                </div>
            </div>
        </div>  
        <!-- Add more special pizzas -->
    </div>        

        <!-- Add other menu categories following similar patterns -->
    </div>

    <!-- Add hit counter here -->
    <div style="text-align: center; margin: 20px 0;">
        <!-- Histats.com  (div with counter) -->
        <div id="histats_counter"></div>
    </div>

    <!-- Histats.com START -->
    <script type="text/javascript">
        var _Hasync= _Hasync|| [];
        _Hasync.push(['Histats.start', '1,4942229,4,2050,280,25,00010000']);
        _Hasync.push(['Histats.fasi', '1']);
        _Hasync.push(['Histats.track_hits', '']);
        (function() {
        var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
        })();
    </script>
    <noscript>
        <a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4942229&101" alt="" border="0"></a>
    </noscript>
    <!-- Histats.com END -->

    
    <script>
// Modify the prepareOrder() function like this:
function prepareOrder() {
    const deliveryType = document.querySelector('input[name="deliveryType"]:checked');
    if (!deliveryType) {
        alert("Valitse toimitusmuoto (nouto tai kotiinkuljetus)!");
        return;
    }

    let message = "Hei! Haluaisin tilata seuraavat tuotteet:\n\n";
    let total = 0;
    let hasItems = false;

    document.querySelectorAll('.quantity-input').forEach(input => {
        const quantity = parseInt(input.value);
        if(quantity > 0) {
            hasItems = true;
            const itemName = input.closest('.menu-item').querySelector('h3').textContent.trim();
            const size = input.dataset.size;
            const price = parseFloat(input.dataset.price);
            const itemTotal = quantity * price;

            message += `🍕 ${itemName} (${size})\n`;
            message += `Määrä: ${quantity} x €${price.toFixed(2)} = €${itemTotal.toFixed(2)}\n\n`;
            total += itemTotal;
        }
    });

    if(!hasItems) {
        alert("Ole hyvä ja valitse tuotteita ennen tilauksen lähettämistä!");
        return;
    }

    // Calculate discount
    const discount = total * 0.1;
    let discountedTotal = total - discount;
    
    // Add delivery cost if needed
    let deliveryCost = 0;
    if(deliveryType.value === 'delivery') {
        deliveryCost = 4;
        discountedTotal += deliveryCost;
    }

    message += `────────────────\n`;
    message += `Alkuperäinen summa: €${total.toFixed(2)}\n`;
    message += `10% alennus: -€${discount.toFixed(2)}\n`;
    if(deliveryCost > 0) {
        message += `Kotiinkuljetus: +€${deliveryCost.toFixed(2)}\n`;
    }
    message += `Loppusumma: €${discountedTotal.toFixed(2)}\n\n`;
    message += `Toimitustapa: ${deliveryType.value === 'delivery' ? 'Kotiinkuljetus' : 'Nouto'}\n`;
    message += "Toimitustiedot:\n- Nimi:\n- Osoite:\n- Puhelinnumero:\n- Lisätiedot:\n\nKiitos!";

    const encodedMessage = encodeURIComponent(message);
    window.open(`https://wa.me/358466367424?text=${encodedMessage}`, '_blank');
}
    </script>
</body>
</html>
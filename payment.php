<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment-Page</title>

    <style >
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap'); 

* { 
    margin: 0; 
    padding: 0; 
    box-sizing: border-box; 
    border: none; 
    outline: none; 
    font-family: 'Poppins', sans-serif; 
    text-transform: capitalize; 
    transition: all 0.2s linear; 
} 

.container { 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    min-height: 100vh; 
    padding: 25px; 
    background: #FBECC5; 
} 

.container form { 
    width: 700px; 
    padding: 20px; 
    background: #fff; 
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2); 
} 

.container form .row { 
    display: flex; 
    flex-wrap: wrap; 
    gap: 15px; 
} 

.container form .row .col { 
    flex: 1 1 250px; 
} 

.col .title { 
    font-size: 20px; 
    color: rgb(237, 55, 23); 
    padding-bottom: 5px; 
} 

.col .inputBox { 
    margin: 15px 0; 
} 

.col .inputBox label { 
    margin-bottom: 10px; 
    display: block; 
} 

.col .inputBox input, 
.col .inputBox select { 
    width: 100%; 
    border: 1px solid #ccc; 
    padding: 10px 15px; 
    font-size: 15px; 
} 

.col .inputBox input:focus, 
.col .inputBox select:focus { 
    border: 1px solid #000; 
} 

.col .flex { 
    display: flex; 
    gap: 15px; 
} 

.col .flex .inputBox { 
    flex: 1 1; 
    margin-top: 5px; 
} 

.col .inputBox img { 
    height: 34px; 
    margin-top: 5px; 
    filter: drop-shadow(0 0 1px #000); 
} 

.container form .submit_btn { 
    width: 100%; 
    padding: 12px; 
    font-size: 17px; 
    background: rgb(1, 143, 34); 
    color: #fff; 
    margin-top: 5px; 
    cursor: pointer; 
    letter-spacing: 1px; 
} 

.container form .submit_btn:hover { 
    background: #3d17fb; 
} 

input::-webkit-inner-spin-button, 
input::-webkit-outer-spin-button { 
    display: none; 
}

    </style>
</head>

<body>
    <div class="container">
        <form action="index.php"  onsubmit="return validateForm()">
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="inputBox">
                        <label for="email">Email:</label>
                        <input type="email" id="email" placeholder="Enter email address" required>
                    </div>
                    <div class="inputBox">
                        <label for="address">Address:</label>
                        <input type="text" id="address" placeholder="Enter address" required>
                    </div>
                    <div class="inputBox">
                        <label for="city">City:</label>
                        <input type="text" id="city" placeholder="Enter city" required>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <label for="state">State:</label>
                            <input type="text" id="state" placeholder="Enter state" required>
                        </div>
                        <div class="inputBox">
                            <label for="zip">Zip Code:</label>
                            <input type="text" id="zip" placeholder="12345" required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>
                    <div class="inputBox">
                           <img src="images/cards.png" alt="credit/debit card image">
                        <label for="paymentMethod">Payment Method:</label>
                        <select id="paymentMethod" required>
                            <option value="creditCard">Credit Card</option>
                            <option value="debitCard">Debit Card</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>
             
                    <div class="inputBox">
                        <label for="cardName">Name On Card:</label>
                        <input type="text" id="cardName" placeholder="Enter card name" required>
                    </div>
                    <div class="inputBox">
                        <label for="cardNum">Credit Card Number:</label>
                        <input type="text" id="cardNum" placeholder="1111 2222 3333 4444" required>
                    </div>
                    <div class="inputBox">
                        <label for="expMonth">Exp Month:</label>
                        <input type="text" id="expMonth" placeholder="MM" required>
                    </div>
                    <div class="inputBox">
                        <label for="expYear">Exp Year:</label>
                        <input type="text" id="expYear" placeholder="YYYY" required>
                    </div>
                    <div class="inputBox">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" placeholder="123" required>
                    </div>
                </div>
            </div>
            <input type="submit" value="Proceed to Checkout" class="submit_btn">
        </form>
    </div>

    <script>
        let cardNumInput = document.querySelector('#cardNum')

        cardNumInput.addEventListener('keyup', () => {
            let cNumber = cardNumInput.value
            cNumber = cNumber.replace(/\s/g, "")

            if (Number(cNumber)) {
                cNumber = cNumber.match(/.{1,4}/g)
                cNumber = cNumber.join(" ")
                cardNumInput.value = cNumber
            }
        })

        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var address = document.getElementById("address").value;
            var city = document.getElementById("city").value;
            var state = document.getElementById("state").value;
            var zip = document.getElementById("zip").value;
            var cardName = document.getElementById("cardName").value;
            var cardNum = document.getElementById("cardNum").value;
            var expMonth = document.getElementById("expMonth").value;
            var expYear = document.getElementById("expYear").value;
            var cvv = document.getElementById("cvv").value;
            var paymentMethod = document.getElementById("paymentMethod").value;

            // Check all fields
            if (name === "" || email === "" || address === "" || city === "" || state === "" || zip === "" || cardName === "" || cardNum === "" || expMonth === "" || expYear === "" || cvv === "" || paymentMethod === "") {
                alert("Please fill out all fields");
                return false;
            }

            // Validate email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Invalid email address");
                return false;
            }

            // Validate zip code
            var zipPattern = /^\d{5}$/;
            if (!zipPattern.test(zip)) {
                alert("Zip Code must be 5 digits");
                return false;
            }

            // Validate credit card number
            var cardNumPattern = /^\d{4}\s\d{4}\s\d{4}\s\d{4}$/;
            if (!cardNumPattern.test(cardNum)) {
                alert("Invalid credit card number");
                return false;
            }

            // Validate CVV
            var cvvPattern = /^\d{3,4}$/;
            if (!cvvPattern.test(cvv)) {
                alert("CVV must be 3 or 4 digits");
                return false;
            }

            // Validate card expiration date
            var currentYear = new Date().getFullYear();
            var currentMonth = new Date().getMonth() + 1; // Months are zero-based
            if (expYear < currentYear || (expYear == currentYear && expMonth < currentMonth)) {
                alert("Invalid card expiration date");
                return false;
            }

            // Redirect to the next page
       
            return true;
        }
    </script>
</body>

</html>

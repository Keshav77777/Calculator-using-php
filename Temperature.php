<!DOCTYPE html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet"> 
        <style>
            *{margin: 0; padding: 0; box-sizing: border-box;
                font-family: 'Mulish', sans-serif;}
            h1{text-align: center; line-height: 20vh; color:  rebeccapurple;}
            .main-div{
                width: 100%;
                height: 80vh;
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            .left{
                background-color:#dfe609;
                border-radius: 30% 70% 70% 30%/30% 30% 70% 70% ;
            }
            .left img{
                width: 400px;
                height: auto;
            }
            .right{
                width: 400px;
                height: 300px;
                background-color: #dfe609;
                border-radius: 15px;
                display: flex;
                flex-direction :column;
                justify-content:center;
                align-items:center;
                text-align:center;
                            }
            .inp1{
                width:250px;
                height: 40px;
                padding: 5px;
                outline: none;
                border-radius: 1px solid grey;
                border-radius: 5px;
            }
            .selection{
                width: 100%;
                margin: 20px 0;
                
            }
            .btn{
                padding: 10px 16px;
                border-radius: 5px;
                outline: none;
                border: none;
                background-color: rebeccapurple;
                color: white;
                font-size: 0.9rem;
            }
            p{
                margin:20px;
            }
        </style>
    </head>
<body>
<header>
    <h1>Temperature Coversion</h1>
    <div class="main-div">
        <div class="left">
            <img src="img.jpg" alt="">
        </div>
        
        <div class="right">
            <form method="POST">
                <input type="text" name="num"class="inp1"  placeholder="Enter your number">
            
            <div class="selection">
                <label>Cel</label>
                <input type="radio" name="units" value="cel">
                <label>Faren</label>
                <input type="radio" name="units" value="fare">
            </div>
            <input type="submit" name="submit" value="Convert now" class="btn">

        </form>
        <div>
            <p>
                <?php
                if(isset($_POST['submit'])){
                    $num=$_POST['num'];
                    $temp=$_POST['units'];
                    if($temp=='cel'){
                        $result=$num*9/5+32;
                        echo "The value of Cel in Farenheit is: {$result}";
                    }
                    else{
                        $result=($num-32)*5/9;
                        echo "The value of Fare in Celcius is: {$result}";
                    }
                }
                ?>
            </p>
        </div>
        </div>
    </div>
    </header>

</body>
    </html>

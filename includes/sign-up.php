<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        
       .inner-iframe {
        width: 70%;
            margin: 1% auto;
            justify-content: center;
            align-items: center;
            text-align: center;
          }
          .inner-iframe iframe {
            margin: auto;
            position: relative;
          }
          @media (max-width: 500px) {
            .inner-iframe {
                width: 100%
                border: 1px solid black;
                margin: 0;
                padding: 0;
            }
            iframe {
                width: 130%;
                margin-left: 0%;
                height: 4000px
            }
          }
    </style>
   
</head>
<body>
        <div class="inner-iframe">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc-m2pc9IG1TQOE87il6XgZ3tbA82Qsl9VHPJQ2BMJZ4on1Zg/viewform?embedded=true" width="700" height="3850" frameborder="0" marginheight="0" marginwidth="0"
            >Loading…</iframe>
        </div>
    
    
    </body>
</html>
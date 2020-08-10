<!DOCTYPE html>
<html>
    <head><title>Package</title></head>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background: #efefef;
        }
        div.main
        {
            width: 80%;
            height: 500px;
            position: relative;
            margin: 100px auto;
        }
        div.content
        {
            padding: 20px 10%;
        }
        div.btn-box
        {
            display: flex;
            border-bottom: 1px solid #ccc;
        }
        .btn-box button
        {
            background: transparent;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 0 10px;
            margin-right: 50px;
            font-size: 20px;
        }
        div.international
        {
            width: 250px;
            height: 200px;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 250px 250px 250px;
            grid-gap: 50px;
        }
        div.kualalumpur
        {
            background: lightblue;
            text-align: center;
        }
        div.singapore
        {
            background: lightblue;
            text-align: center;
        }
        div.dubai
        {
            background: lightblue;
            text-align: center;
        }
        a
        {
            text-decoration: none;
        }
    </style>

    <body>
    <?php include('header.php');?>
    
    <div class="main">
        <div class="btn-box">
            <button>International</button>
            <button>Domestic</button>
        </div>
        
        <div class="content">
            <div class="international">
                <div class="kualalumpur">
                    <a href="">Kuala Lumpur</a>
                </div>
                <div class="singapore">
                    <a href="">Singapore</a>
                </div>
                <div class="dubai">
                    <a href="">Dubai</a>
                </div>
            </div>
            <div class="domestic">

            </div>
        </div>
    </div>
    
   
    
    <?php include('footer.php');?>
    </body>
</html>
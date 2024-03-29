   
   <style>
    

    #search_box {
        outline-width: 0;
    }

    #search input[type="text"] {
        background: url(./images/searchicon.png) no-repeat 10px 6px #fcfcfc;
        border: 1px solid #d1d1d1;
        font: bold 12px Arial,Helvetica,Sans-serif;
        color: #bebebe;
        width: 150px;
        padding: 6px 15px 6px 35px;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
        text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
        -webkit-transition: all 0.7s ease 0s;
        -moz-transition: all 0.7s ease 0s;
        -o-transition: all 0.7s ease 0s;
        transition: all 0.7s ease 0s;
    }

    #search input[type="text"]:focus {
        width: 250px;
    }
</style>

<div id="sphinx_search">
    <form method="get" action="" id="search">
        <input name="q" type="text" size="40" placeholder="Search..."
               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search...'"
               id="search_box"
               style="-webkit-box-shadow: 3px 3px 3px #ccc;
               -moz-box-shadow: 3px 3px 3px #ccc;
               box-shadow: 3px 3px 3px #ccc;
               "/>
    </form>	
</div>
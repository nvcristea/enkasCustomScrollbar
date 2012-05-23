You have an example of use in `demo_extended.php`

# Installation guide:

## 1) Load .js files

    <code>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.js"></script>
        <script src="js/jquery.mCustomScrollbar.enkas.js"></script>
    </code>

## 2) Add on your elements the class 'scrollbar' and make sure your elements that has the 'scrollbar' class set has also set an unique id attribute

ex 1:
    <code>
        < div id="my_container" class="scrollbar" >
            Lorem ipsum... your html content ...
        < /div >
    </code>

ex 2:
    <code>
        < div id="my_id" class="my-class my-other-class scrollbar" >
            Lorem ipsum... your html content ...
        < /div >
    </code>

## 3) Have fun! All set.

## 4) Function to load new content dynamically

    <code>
        $("#" + id + ' .content').load(file, function(){
            reInitIdScrollbar(id);
        });
    </code>

# Details

More details will be added on Wiki page
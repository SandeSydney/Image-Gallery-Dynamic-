<?php

#Template to be reused in developing other projects

return "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <title>$pageData->title</title>
        <meta charset='UTF-8'>
        <meta http-equiv='Content-Type' content='text/html'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        $pageData->css
        $pageData->embeddedStyle
    </head>
    <body>
        $pageData->content
    </body>
    </html>
";
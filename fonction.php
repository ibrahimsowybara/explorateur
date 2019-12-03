<div class="container mt-5">

    <div class="row d-flex justify-content-center align-items-center">
    <?php 

    $path = getcwd(); 
    $d = dir($path);
    // while (false !== ($entry = $d->read())) {
    //    echo ("/$entry");
    // }
       if (false !== ($entry = $d->read())) {
        //    echo $entry."\n";
        
        echo '<a style ="margin: 1em 2em; " href=" '.$entry.' " > '.$entry.'  </a> ';
    }




    $iterator = new FilesystemIterator(__DIR__, FilesystemIterator::CURRENT_AS_PATHNAME); 
    foreach ($iterator as $fileinfo) {
        echo $iterator->current() . "\n";
    }

    
    ?>
    </div>
</div>
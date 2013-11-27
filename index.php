<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require 'functions.php';

$text="em ipsum dolor sit amet, consectetur adipiscing elit. 
    Donec ac erat ac nunc elementum hendrerit at ut nibh. 
    Phasellus et magna eu quam egestas consequat at ac eros. 
    Pellentesque sit amet nisl quis tellus vestibulum ultricies at non turpis. 
    Integer cursus est sed justo pretium molestie.Integer sit amet velit erat, vitae mollis libero. 
    Vivamus ac interdum tellus. Integer arcu velit, dapibus ultrices aliquam nec, viverra ut turpis. 
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at libero turpis. 
    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
    Mauris non lacus lorem. Aenean est sem, dapibus sed ultrices vitae, vulputate non sapien. 
    Nullam vulputate erat et quam imperdiet accumsan vitae elementum ante. 
    Vestibulum scelerisque libero ligula. In in nibh lacus, sit amet dignissim purus. 
    Nulla scelerisque, nibh quis tincidunt convallis, velit nibh tristique massa, sit amet ornare est orci vitae nisi.
    Nunc molestie ante quis ante gravida vitae volutpat ligula egestas. 
    Nam a metus risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
    Vestibulum elit risus, congue interdum aliquet et, tempor sit amet est. Phasellus rhoncus dictum pharetra. In dictum scelerisque lobortis. In hac habitasse platea dictumst. Nam quis suscipit lectus. Praesent tortor risus, tempor sed euismod non, aliquet eget sem. Suspendisse mi nunc, mattis fringilla mollis quis, laoreet a sapien. 
    Ut suscipit, mauris non mattis pharetra, lacus mi tempor lacus, sed tincidunt nisi mauris eu ipsum.
    Pellentesque vel erat ac elit ultrices dignissim a ut velit. Donec laoreet sem a turpis viverra ut aliquet odio interdum. Nunc consequat rhoncus vehicula. Cras iaculis enim in neque hendrerit eget laoreet mi adipiscing.";

$num=50;

echo truncate_text($text, $num);

?>

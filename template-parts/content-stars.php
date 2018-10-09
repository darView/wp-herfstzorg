<?php
$stars = get_field('home_testimonial_stars');
$star = 0;
?>
<p class="review-stars">
    <span class="fa fa-star<?php if ($stars > $star++) echo ' checked'; ?>"></span>
    <span class="fa fa-star<?php if ($stars > $star++) echo ' checked'; ?>"></span>
    <span class="fa fa-star<?php if ($stars > $star++) echo ' checked'; ?>"></span>
    <span class="fa fa-star<?php if ($stars > $star++) echo ' checked'; ?>"></span>
    <span class="fa fa-star<?php if ($stars > $star++) echo ' checked'; ?>"></span>
</p>
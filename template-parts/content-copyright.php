<?php
    $startYear = 2018;
    $currentYear = date("Y");
    $period = $currentYear;
    if ($currentYear > $startYear) {
        $period = $startYear. "-" . $currentYear;
    }
?>
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-white">
                <span class="copyright">Copyright &copy; <?php echo $period; ?> HerfstZorg</span>
                |
                <span class="website"> Website door <a href="http://www.darview.com" target="_blank" data-toggle="tooltip" data-placement="top" title="Bezoek de website van darView (opent in een nieuw tabblad)">darView</a></span>
            </div>
            <div class="col-sm-6 text-white text-capitalize">
                <span class="sitemap"><a href="/sitemap_index.xml">sitemap</a></span>
            </div>
        </div>
    </div>
</section>
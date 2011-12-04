<!doctype html>
        <!--[if lt IE 7]> <html class="no-js ie ie6" lang="en"> <![endif]-->
        <!--[if IE 7]>    <html class="no-js ie ie7" lang="en"> <![endif]-->
        <!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
        <!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
        <!--[if IE 10]>    <html class="no-js ie10" lang="en"> <![endif]-->
        <!--[if gt IE 10]><!--><html class="no-js" lang="en"><!--<![endif]-->
        <head>
        <meta charset="utf-8">
        <?php if(!isset($title)) $title = "Hives Social Group Collaboration www.joinhives.com"?>
        <title><?=$title?></title>  
        
        <?php if(!isset($description)) $description = "Social Collaboration"?>
        <?php if(!isset($keywords)) $keywords = "Social Network, Social Group, Social Colloboration"?>
        <?php if(!isset($author)) $author = "Team Hives"?>
        <?php if(!isset($robots)) $robots = "noindex, nofollow"?>
        
        <meta name="description" content="<?=$description?>">
        <meta name="keywords" content="<?=$keywords?>">
        <meta name="author" content="<?=$author?>">
        <meta name="robots" content="<?=$robots?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.ico">  

        <script type="text/javascript">
            var root = '<?=site_url('')?>';
            var mod = '<?=$this->uri->rsegment(1)?>';     
        </script>

        <?php
            if(!isset($cssgroup)) $cssgroup = "default";
            
            $links = array(
                'href'=>site_url("h/css/{$cssgroup}/".mtime('css',$cssgroup)).".css",
                'rel'=>'stylesheet',
            );
            echo link_tag($links);
        ?>
    </head>

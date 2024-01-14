<?php
$requested_resource = strtolower($_GET['url'] ?? '');
$partner_file_path = $_SERVER['DOCUMENT_ROOT'] . '/partners/' . $requested_resource;
$download_file_path = $_SERVER['DOCUMENT_ROOT'] . '/download/' . $requested_resource;

if (empty($requested_resource)) {
    $requested_resource = "designkarussell";
}

if ($requested_resource == 'admin_page') {

    $ordner = $_SERVER['DOCUMENT_ROOT'] . '/partners/';
    if ($handle = opendir($ordner)) {

        while (false !== ($eintrag = readdir($handle))) {
            if ($eintrag != "." && $eintrag != ".." && is_dir($ordner . '/' . $eintrag)) {
                echo '<a href="/' . $eintrag . '">' . $eintrag . '</a><br>';
            }
        }
        closedir($handle);
    }

} elseif (file_exists($partner_file_path) && is_dir($partner_file_path)) {
    if (!class_exists('DesignType')) {
        include $_SERVER['DOCUMENT_ROOT'] . '/inc/classes/DesignType.php';
    }
    if (!class_exists('LinkType')) {
        include $_SERVER['DOCUMENT_ROOT'] . '/inc/classes/LinkType.php';
    }

    include $_SERVER['DOCUMENT_ROOT'] . '/partners/' . $requested_resource . '/infos.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/inc/classes/Link.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/inc/classes/SocialLink.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/partners/' . $requested_resource . '/links.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/partials/_page.php';
} elseif (file_exists($download_file_path) && is_file($download_file_path)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($download_file_path) . '"');
    readfile($download_file_path);
} else {
    echo "Ressource nicht gefunden: " . htmlspecialchars($requested_resource);
}

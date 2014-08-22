<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_clean
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_clean_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page" class="container-fluid">
    <header id="page-header" class="clearfix">
    <div class="top-login">
        <ul class="unlist">
            <li><a href="">Inicio</a></li>
            <li><a href="">Mi perfil</a></li>
        </ul>
    </div>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
            <img src="theme/clean/img/ip-header-logo.png">
        </div>
    </header>

    <div id="page-content" class="row-fluid">
        <?php echo $OUTPUT->blocks('side-pre', 'span3 desktop-first-column'); ?>
            <div id="<?php echo $regionbsid ?>" class="span6">
                <div class="row-fluid">
                    <div class="span12 social-bar"></div>
                    <div class="span12 center-main-block">
                        <ul>
                            <li class="first-block">
                                <div class="head">
                                    <img src="theme/clean/img/ip-small-logo.png">
                                </div>
                                <div class="content"></div>
                            </li>
                            <li class="date-block">
                                <h2>JUNIO 2014</h2>
                                <div class="content">
                                    <div class="course-info">
                                        <p>Curso de Actualización en:</p>
                                        <h1>Titulo del Curso</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="date-block">
                                <h2>JULIO 2014</h2>
                                <div class="content">
                                    <div class="course-info">
                                        <p>Curso de Actualización en:</p>
                                        <h1>Titulo del Curso</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="date-block">
                                <h2>AGOSTO 2014</h2>
                                <div class="content">
                                    <div class="course-info">
                                        <p>Curso de Actualización en:</p>
                                        <h1>Titulo del Curso</h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="span12 center-bottom-block">
                        <ul class="conf-block">
                            <li><h2>Audioconferencias<br />en Vivo 2014</h2></li>
                            <li class="intro"><p>Cada mes un nuevo módulo temático, Video Conferencia en Vivo. <br /> 
                                Acceso libre y gratuito con cupo restringido.</p></li>
                            <li class="bottom">
                                <div class="content">
                                    <ul>    
                                        <li>Horario de las Transmisiones</li>
                                        <li><span>22:00 hs.</span><p>Argentina  |  Brasil  |  Uruguay</p></li>
                                        <li><span>21:00 hs.</span><p>Chile  |  Paraguay</p></li>
                                        <li><span>20:30 hs.</span><p>Venezuela</p></li>
                                        <li><span>20:00 hs.</span><p>Colombia  |  Ecuador  |  Mexico  | Perú</p></li>
                                        <li><span>19:00 hs.</span><p>Guatemala  |  Costa Rica  |  El Salvador  | Honduras</p></li>
                                    </ul>
                                    <div class="links-container">
                                        <a href="">VER PROGRAMA</a>
                                        <a href="">IR A LA SALA VIRTUAL</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="forum-block">
                            <h3>INGRESE <br />AL FORO</h3>
                            <a href="">CLICK AQUI</a>
                        </div>
                    </div>
                    <section id="region-main" class="span12">
                        <?php
                        echo $OUTPUT->course_content_header();
                        echo $OUTPUT->main_content();
                        echo $OUTPUT->course_content_footer();
                        ?>
                    </section>
                </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
    </div>

    <footer id="page-footer">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <?php
        echo $html->footnote;
        echo $OUTPUT->login_info();
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>

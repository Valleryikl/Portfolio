<?php
function portfolioItem($titleClass, $title, $img, $link, $stack, $content)
{
    echo '<div class="portfolio-group">
                        <div class="portfolio-item ' . $titleClass . '">
                            <h3>' . $title . '</h3>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-item__decribe">
                                <h3>' . $title . '</h3>
                                <img src="' . $img . '" alt="Foto of the ' . $title . '">
                                <a class="link" href="' . $link . '" target="_blank" rel="noopener noreferrer">link: ' . $title . '</a>
                                <div class="portfolio-text">
                                    <h4>' . $stack . '</h4>
                                    <p>' . $content . '</p>
                                </div>
                            </div>
                        </div>
            </div>';
}

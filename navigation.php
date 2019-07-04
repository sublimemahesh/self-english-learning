<div class="layout-sidebar">
    <div class="layout-sidebar-backdrop"></div>
    <div class="layout-sidebar-body">
        <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
                <ul class="sidenav level-1">
                    <li class="sidenav-search">
 
                        <form class="sidenav-form" action="">
                            <div class="form-group form-group-sm">
                                <div class="input-with-icon">
 
                                </div>
                            </div>
                        </form>
                    </li>
                    <?php
                    $STUDENT = new Student($_SESSION['id']);
                    if ($STUDENT->level == 1) {
                        ?>
 
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button> 
                                    <span class="sidenav-icon icon icon-works">&#95;</span>
                                </div>
                                <strong>Beginner</strong>
                                <span class="sidenav-icon icon icon-works">&#103;</span>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3> 
                            </div>
                            <div class="card-body " data-toggle="match-height"  >
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>

                                        </div>

                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card disabled">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                    <span class="sidenav-icon icon icon-works">&#95;</span>
                                </div>
                                <strong></strong>
                                   <span class="sidenav-icon icon icon-works">&#103;</span>
                                   <span class="sidenav-icon icon icon-works"></span>
                                <h3 class="media-heading">
 
                                    <span class="fw-l">0%</span>
 
                                </h3>
                            </div>
                            <div class="card-body" data-toggle="match-height" style="display: none">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card disabled">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
 
                                </div>
                                <strong>Advanced</strong>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3>

                            </div>
                            <div class="card-body" data-toggle="match-height" style="display: none">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } elseif ($STUDENT->level == 2) {
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button> 
                                </div>
                                <strong>Beginner</strong>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3> 
                            </div>
                            <div class="card-body " data-toggle="match-height" style="display: none">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>

                                        </div>

                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button> 
                                </div>
                                <strong>Intermediate</strong>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3>
                            </div>
                            <div class="card-body" data-toggle="match-height">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card disabled">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button> 
                                </div>
                                <strong>Advanced</strong>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3>

                            </div>
                            <div class="card-body" data-toggle="match-height" style="display: none">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php
                    } elseif ($STUDENT->level == 3) {
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button> 
                                </div>
                                <strong>Beginner</strong>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3> 
                            </div>
                            <div class="card-body " data-toggle="match-height" style="display: none">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>

                                        </div>

                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button> 
                                </div>
                                <strong>Intermediate</strong>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3>
                            </div>
                            <div class="card-body" data-toggle="match-height" style="display: none">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                  
                                </div>
                                <strong>Advanced</strong>
                                <h3 class="media-heading">
                                    <span class="fw-l">0%</span>
                                </h3>

                            </div>
                            <div class="card-body" data-toggle="match-height">
                                <ul class="list-group list-group-divided">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Writing</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Reading</a>
                                                </h6>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Listening</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Speaking</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">
                                                    <a href="#"> Grammar & Vocabulary</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php }else{ ?>
                    
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
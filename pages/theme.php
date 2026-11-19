<!-- ------------Theme page------------- -->
<div class="col-12 theme-page">
    <div class="col-12 blog-theme-banner">
        <div class="col-12 theme-banner">
            <div class="col-12 theme-gradient d-flex justify-content-center align-items-center">
            <!-- nothing -->
            </div>
        </div>
        <div class="col-8 m-auto theme-decription">
            <div class="txt">
                <div class="theme-title"><h1>What DPS Printing Studio can do </h1></div>
                <div class="col-6 theme-subtitle  mt-5 mb-5">
                    <p>We bring ideas to life through creative design, professional printing, advertising, and architectural solutions.        
                        Combining innovation, technical expertise, and quality craftsmanship, we deliver impactful solutions tailored 
                        to every project.</p>
                </div>
            </div>
            <div class="col-json">
                <div class="col-12 blog-theme-service">
                    <?php 
                        $data = json_decode(file_get_contents("./data/themeDetail.json"), true);
                        foreach($data as $item){
                    ?>
                        <div class="theme-service">
                            <h5><?= $item['title'] ?></h5>
                            <?php
                            foreach($item['service'] as $service){
                            ?>
                                <p><?= $service?></p>
                            <?php
                                }
                            ?>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- --------blog-theme-our-------- -->
    <div class="col-12 blog-theme-our">
        <div class="col-5 theme-our m-auto text-center">
                <h5>OUR STRAGTEY</h5>
                <span>From Vision Reality</span>
                <p>We combine technical accuracy, artistic know-how, and strategic thinking to provide all-encompassing 
                     solutions for design, printing, advertising, and architecture. Every project, from conception to execution,
                     demonstrates our dedication to excellence, quality, and innovation.
                </p>
                <div class="bar_set_one m-auto mt-5 mb-5">&nbsp;</div>
                <a href="#"> FINDE MORE Services <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </div>
    <!-- --------blog-theme-design--------- -->
    <div class="col-12  blog-theme-design d-flex">
        <div class="col-6 theme-txt-design d-flex justify-content-center align-items-center">
            <div class="col-7 theme-title-design">
                <h5>CREATIVE DESIGN & BRANDING</h5>
                <p>We offer innovative branding and design solutions that turn concepts into unique visual 
                    experiences. Our team creates powerful designs that enhance brand identification by 
                    fusing technological know-how, artistic talent, and creative thought.
                </p>
                <p>From hand-drawn drawings and graphic design to digital artwork and 3D modeling, we 
                    use creative teamwork and inventive design to bring ideas to life. We create distinctive 
                    visual solutions that are suited to each client's requirements by fusing a variety of talents 
                    and viewpoints.
                </p>
            </div>
        </div>
        <div class="col-6 theme-design-img"><img src="./image/img-theme/dsign.jpg" alt=""></div>
    </div>
    <!-- -------blog-die-cutting-------- -->
    <div class="col-12 blog-die-cutting">
        <div class="col-5 theme-die-cut m-auto text-center">
            <h5>DIE - CUTTING</h5>
            <div class="txt mt-5 mb-5">
                <P>our services convert printed materials into unique shapes and sizes. To satisfy various product needs, we create precise forms and 
                reliable outcomes using sophisticated cutting equipment and exacting methods.</P>
            </div>
            <div class="txt">
                <p>At every step, our production team collaborates to properly prepare materials, set up cutting plates, modify machine settings, and 
                run the machinery. Team members keep an eye on the cutting process, verify alignment, eliminate extra materials, and examine 
                final products to guaranty precision and quality throughout manufacturing.</p>
            </div>
            <p></p>
        </div>
    </div>
    <!-- ----------blog-digital-printing-------- -->
    <div class="col-12 blog-digital-printing">
        <div class="col-12 digital-printing-img"><img src="./image/img-theme/cutting.png" alt=""></div>
        <div class="col-12">
            <div class="col-9 digital-printing-text m-auto d-flex justify-content-between">
                <div class="col- digital-text ">
                    <h5>DIFITAL PRINTING</h5>
                    <div class="txt">
                        <p>Our printing and production services cover a wide range of printing technologies, including digital,
                            offset, UV, flexographic, sublimation, and 3D printing, as well as laser marking and specialized printing. 
                            Equipped with advanced Japanese printing machines, we produce various printed materials and 
                            customized products with precision and consistent quality.

                        </p>
                    </div>
                    <div class="txt">
                        <p>Our skilled team works together throughout the production process, from preparing materials and
                            setting up machines to operating equipment and checking finished products. With technical 
                            knowledge and careful attention to detail, we ensure every product meets our quality standards. 
                        </p>
                    </div>
                </div>
                <div class="bar_set_two">&nbsp;</div>
                <div class="col- digital-text">
                    <h5>FINSHING & ASSEMBLY</h5>
                    <div class="txt">
                        <p>Our finishing and assembly services include cutting, trimming, laminating, folding, binding, and
                            assembling a wide range of printed products. These processes enhance product appearance, 
                            quality, and durability.
                        </p>
                    </div>
                    <div class="txt">
                        <p>Our team works together to prepare materials, operate finishing machines, assemble products, and 
                            inspect the final results. With skilled workmanship and attention to detail, we ensure every product 
                            is properly finished and ready for delivery.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 digital-image">
            <div class="col-6 image"><img src="./image/img-theme/digitalimg1.png" alt=""></div>
            <div class="col-6 image"><img src="./image/img-theme/digitalimg2.png" alt=""></div>
        </div>
    </div>
    <!-- ----------blog-them-text-3------ -->
    <div class="col-12 blog-theme-text-3">
        <div class="col-5 m-auto theme-txt-3 text-center">
            <h5>INSTALLATION & EXECUTION</h5>
            <div class="txt mt-5">
                <p>
                    From banner installation and signage mounting to advertising structures, event displays, and architectural projects, our team
                    handles a wide range of on-site work. We work closely to manage site preparation, material handling, measurements, equipment 
                    setup, banner mounting, and structural assembly. Through effective coordination, technical expertise, and careful supervision, we 
                    ensure every project is completed safely, accurately, and according to project requirements.
                </p>
            </div>
        </div>
    </div>
    <!-- --------blog-theme-banner-3-------- -->
    <div class="col-12 blog-theme-banner-3">
        <div class="col-12 image"><img src="./image/img-theme/banner3.png" alt=""></div>
        <div class="col-12 blog-theme-text-4">
            <div class="col-5 m-auto theme-txt-4 text-center">
                <h5>INSTALLATION & EXECUTION</h5>
                <div class="txt mt-5 mb-5">
                    <p>
                       We are committed to delivering quality products and reliable services through modern technology, skilled teamwork, and pro
                        fessional support. Our goal is to make every project smooth, efficient, and completed to your expectations. 
                    </p>
                </div>
            </div>
            <div class="col-8 m-auto blog-icon1">
                <div class="col">
                    <i class="fa-solid fa-clock"></i>
                    <span>ALWAYS ON TIME</span>
                    <p>Complete Projects on Schedule</p>
                </div>
                <div class="col">                        
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>EASY ACCESS</span>
                    <p>Convenient Service and Project Support</p>
                </div>
                <div class="col">                        
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>ALWAYS AVAILABLE</span>
                    <p>Quick Responses and Reliable Support</p>
                </div>
                <div class="col">                       
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span>AFFORABLE PRICES</span>
                    <p>Quality Services At Fair Prices</p>
                </div>
                <div class="col">                        
                    <i class="fa-solid fa-layer-group"></i>
                    <span>EFFICIENT PRODUCTION</span>
                    <p>Fast and Reliable Production</p>
                </div>
                <div class="col">
                    <i class="fa-solid fa-bullseye"></i>
                    <span>ACCURATE PRINT</span>
                    <p>Local Design & Print Support</p>
                    </div>
            </div>
        </div>
    </div>
</div>
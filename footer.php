        
        <footer>
            <div class="container-fluid" style="background-color: #9A1D4E;">
                <div class="container" id="footer">

                    <div class="row">
                        <div class="col footer">
                            <h3 class="footer">Contact Us</h3>

                            <h5 class="footer">Our Adviceline number</h5>
                            <p class="footer">0300 330 1195</p>

                            <h5 class="footer">Our General Office number</h5>
                            <p class="footer">01325 266888<br>
                            <small class="footer">The General Office number doesn't provide advice.</small>
                            </p>
                            
                            <h5 class="footer">Our Address</h5>
                            <p class="footer">
                                Citizens Advice Darlington<br>
                                The CORE<br>
                                Church Row<br>
                                Darlington<br>
                                DL1 5QD<br>
                            </p>

                            <h5 class="footer">Our Email</h5>
                            <p class="footer">
                            <a href="mailto:admin.desk@darlingtoncab.co.uk" class="footer">admin.desk@darlingtoncab.co.uk</a><br>
                            <small class="footer">We regret we cannot offer advice by email.</small>
                            </p>

                        </div>

                        <div class="col footer">
                            <h3 class="footer">Opening Times</h3>
                            <small class="footer">Our General Office opening times</small>
                            <table class="table">
                                <thead>
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">Open</th>
                                <th scope="col">Close</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Mon</th>
                                <td>10am</td>
                                <td>4pm</td>
                                </tr>
                                <tr>
                                <th scope="row">Tue</th>
                                <td>10am</td>
                                <td>4pm</td>
                                </tr>
                                <tr>
                                <th scope="row">Wed</th>
                                <td>10am</td>
                                <td>6pm</td>
                                </tr>
                                <tr>
                                <th scope="row">Thu</th>
                                <td>10am</td>
                                <td>4pm</td>
                                </tr>
                                <tr>
                                <th scope="row">Fri</th>
                                <td>10am</td>
                                <td>4pm</td>
                                </tr>
                            </tbody>
                            </table>

                        </div>

                        <div class="col footer">
                            <h3 class="footer">Our Location</h3>
                            <iframe 
                            frameborder="0" 
                            height="350" 
                            scrolling="no" 
                            src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Citizens+Advice+Bureau,+Horse+Market,+Darlington&amp;aq=0&amp;oq=darlington+citizensd&amp;sll=52.8382,-2.327815&amp;sspn=10.947951,25.334473&amp;ie=UTF8&amp;hq=Citizens+Advice+Bureau,&amp;hnear=Horse+Market,+Darlington,+United+Kingdom&amp;t=m&amp;cid=9505367898849982330&amp;ll=54.524021,-1.554651&amp;spn=0.014944,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed" 
                            width="100%"
                            >
                            </iframe>
                            <br>
                            <small class="footer">
                                <a 
                                href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Citizens+Advice+Bureau,+Horse+Market,+Darlington&amp;aq=0&amp;oq=darlington+citizensd&amp;sll=52.8382,-2.327815&amp;sspn=10.947951,25.334473&amp;ie=UTF8&amp;hq=Citizens+Advice+Bureau,&amp;hnear=Horse+Market,+Darlington,+United+Kingdom&amp;t=m&amp;cid=9505367898849982330&amp;ll=54.524021,-1.554651&amp;spn=0.014944,0.025749&amp;z=14&amp;iwloc=A"
                                class="footer"
                                >
                                View Larger Map
                                </a>
                            </small>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <?php
                            wp_nav_menu( array(
                            'theme_location'    => 'footer',
                            'depth'             => 1,
                            'container'         => 'div',
                            'container_class'   => '',
                            'container_id'      => '',
                            'menu_class'        => 'nav justify-content-center footer-menu',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                        
                        </div>

                    </div>

                    <div class="row">
                        <div class="col footer">
                            <p>
                                <small>
                                    © Citizens Advice Darlington (CAD) located at The CORE, Church Row, Darlington, DL1 5QD.<br>
                                    Citizens Advice Darlington is an operating name of Darlington Citizens Advice Bureau<br>
                                    Company limited by guarantee, Charity Registration No: 1112414, Registered Company Number: 5562437<br>
                                </small>
                            </p>
                        
                        </div>
                    </div>

                </div>

                

            

            </div>

            

        </footer>

        <!-- Bootstrap core Javascript-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <?php wp_footer(); ?>
    </body>

</html>
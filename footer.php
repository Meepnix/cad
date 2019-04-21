        
        <footer>
            <div class="container-fluid" style="background-color: #9A1D4E;">
                <div class="container">

                <div class="row">
                    <div class="col footer">
                        <h3>Contact Us</h3>

                        <h5>Our Adviceline number</h5>
                        <p>0300 330 1195</p>

                        <h5>Our General Office number</h5>
                        <p>01325 266888<br>
                        <small>The General Office number doesn't provide advice.</small>
                        </p>
                        
                        <h5>Our Address</h5>
                        <p>
                            Citizens Advice Darlington<br>
                            The CORE<br>
                            Church Row<br>
                            Darlington<br>
                            DL1 5QD<br>
                        </p>

                        <h5>Our Email</h5>
                        <p>
                        <a href="mailto:admin.desk@darlingtoncab.co.uk" class="footer">admin.desk@darlingtoncab.co.uk</a><br>
                        <small>We regret we cannot offer advice by email.</small>
                        </p>

                    </div>

                    <div class="col footer">
                        <h3>Opening Times</h3>
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
                    <h3>Our Location</h3>
                    <iframe frameborder="0" height="350" scrolling="no" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Citizens+Advice+Bureau,+Horse+Market,+Darlington&amp;aq=0&amp;oq=darlington+citizensd&amp;sll=52.8382,-2.327815&amp;sspn=10.947951,25.334473&amp;ie=UTF8&amp;hq=Citizens+Advice+Bureau,&amp;hnear=Horse+Market,+Darlington,+United+Kingdom&amp;t=m&amp;cid=9505367898849982330&amp;ll=54.524021,-1.554651&amp;spn=0.014944,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed" width="100%"></iframe><br />
<small><a href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Citizens+Advice+Bureau,+Horse+Market,+Darlington&amp;aq=0&amp;oq=darlington+citizensd&amp;sll=52.8382,-2.327815&amp;sspn=10.947951,25.334473&amp;ie=UTF8&amp;hq=Citizens+Advice+Bureau,&amp;hnear=Horse+Market,+Darlington,+United+Kingdom&amp;t=m&amp;cid=9505367898849982330&amp;ll=54.524021,-1.554651&amp;spn=0.014944,0.025749&amp;z=14&amp;iwloc=A">View Larger Map</a></small>

                    </div>
                </div>    

            <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer',
                'depth'             => 1,
                'container'         => 'div',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'nav justify-content-center footer',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
		    ?>

            </nav>

        </div>

            

        </footer>

        <!-- Bootstrap core Javascript-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <?php wp_footer(); ?>
    </body>

</html>
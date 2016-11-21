<section id="enroll">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ready_joe">
                            <div class="joe_action_link">
                                <div class="field-items">
                                    <div class="spin"></div>
                                    <div class="field-item"><span class="title">Ready? Let's Joe!</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-6">
                        <form action="<?php echo get_site_url().'/lets-joe' ?>" method="GET">
                            <div class="enroll_box margin40">
                                <div class="block -bg_violet edge_top">
                                    <h2>Choose a JOE <br> Programme today!</h2>
                                </div>

                                <div class="enroll_content">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleSelect1"><p>My child's age</p></label>
                                            <select name="age" class="form-control" id="exampleSelect1">
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelect2"><p>I would like to enroll my child for</p></label>
                                            <select name="class" class="form-control" id="exampleSelect2">
                                                <option value="Holiday Bootcamp (4 + 1 days)">Holiday Bootcamp (4 + 1 days)</option>
                                                <option value="Fast Track (5 months)">Fast Track (5 months)</option>
                                            </select>
                                        </div>
                                    </form>

                                    <a class="programs_btn" href="<?php echo site_url('programmes') ?>">Our Programmes</a>
                                    <button class="ripplelink joe_btn float-r" type="submit">Let's JOE!</button>
                                </div>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php


namespace HWP_Ticket\core\ui;


use HWP_Ticket\core\includes\AnalyticsData;
use HWP_Ticket\core\includes\Functions;

class AnalyticsUI
{

    protected static $_instance = null;
    public static function get_instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }



    public static function dashboard()
    {
    ?>
        <!-- Main Content -->
        <section class="content">
            <div class="container">

                <div class="row clearfix">
                    <div class="col"></div>
                    <div class="col">
                        <h2>پیشخوان</h2>
                    </div>
                    <div class="col"></div>
                </div>

                <div class="row clearfix statistics">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <svg height="45px" viewBox="0 -2 512 512" width="45px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m504.394531 352.113281c4.199219 0 7.605469-3.40625 7.605469-7.605469v-162.804687c0-31.261719-25.433594-56.695313-56.695312-56.695313h-101.167969l-59.191407-102.523437c-8.128906-14.078125-22.6875-22.484375-38.945312-22.484375s-30.816406 8.40625-38.945312 22.484375l-23.910157 41.417969c-2.097656 3.636718-.855469 8.285156 2.78125 10.386718 3.636719 2.097657 8.289063.851563 10.390625-2.785156l23.910156-41.414062c5.378907-9.320313 15.015626-14.882813 25.773438-14.882813s20.394531 5.5625 25.773438 14.882813l94.003906 162.816406c5.378906 9.316406 5.378906 20.441406 0 29.761719-5.382813 9.316406-15.015625 14.878906-25.773438 14.878906h-188.007812c-10.757813 0-20.394532-5.5625-25.773438-14.878906-5.378906-9.320313-5.378906-20.445313 0-29.761719l55.363282-95.894531c2.101562-3.636719.855468-8.285157-2.78125-10.386719-3.636719-2.097656-8.289063-.851562-10.386719 2.785156l-20.554688 35.597656h-101.179687c-31.253906 0-56.683594 25.433594-56.683594 56.695313v270.972656c0 30.492188 24.804688 55.296875 55.296875 55.296875h401.398437c30.496094 0 55.304688-24.804687 55.304688-55.296875v-77.75c0-4.199219-3.40625-7.605469-7.605469-7.605469s-7.601562 3.40625-7.601562 7.605469v77.75c0 22.105469-17.988281 40.089844-40.097657 40.089844h-401.398437c-22.105469 0-40.089844-17.984375-40.089844-40.089844v-253.140625l178.480469 148.609375c18.058594 15.035157 40.183594 22.550781 62.3125 22.550781 22.125 0 44.253906-7.519531 62.300781-22.550781l178.492188-148.613281v144.976562c0 4.199219 3.402343 7.605469 7.601562 7.605469zm-195.824219-15.652343c-30.460937 25.371093-74.679687 25.371093-105.148437-.003907l-188.164063-156.671875c1.003907-21.988281 19.199219-39.570312 41.425782-39.570312h92.402344l-26.03125 45.085937c-8.128907 14.078125-8.128907 30.890625 0 44.96875 8.128906 14.078125 22.6875 22.484375 38.941406 22.484375h188.007812c16.257813 0 30.816406-8.40625 38.941406-22.484375 8.128907-14.078125 8.128907-30.890625 0-44.96875l-26.027343-45.085937h92.386719c22.234374 0 40.433593 17.582031 41.4375 39.570312zm0 0"/>
                                        <path d="m341.710938 355.023438c-3.226563-2.6875-8.023438-2.25-10.710938.976562-2.683594 3.226562-2.246094 8.023438.980469 10.710938l121.246093 100.949218c1.421876 1.183594 3.148438 1.761719 4.863282 1.761719 2.179687 0 4.34375-.933594 5.847656-2.742187 2.6875-3.226563 2.25-8.019532-.980469-10.707032zm0 0"/>
                                        <path d="m170.289062 355.023438-121.246093 100.949218c-3.230469 2.683594-3.667969 7.480469-.980469 10.707032 1.503906 1.804687 3.667969 2.738281 5.847656 2.738281 1.714844 0 3.441406-.574219 4.863282-1.757813l121.246093-100.953125c3.226563-2.6875 3.664063-7.480469.980469-10.707031-2.6875-3.226562-7.484375-3.664062-10.710938-.976562zm0 0"/>
                                        <path d="m256.199219 211.183594c6.960937 0 12.839843-5.972656 12.839843-13.042969 0-7.300781-5.757812-13.242187-12.839843-13.242187-7.304688 0-13.246094 5.941406-13.246094 13.242187 0 7.070313 6.066406 13.042969 13.246094 13.042969zm0 0"/>
                                        <path d="m255.996094 174.609375c3.859375 0 9.203125-2.777344 9.203125-7.992187 0-15.742188.617187-33.253907 1.214843-50.1875.59375-16.894532 1.210938-34.363282 1.210938-50.046876 0-6.609374-4.78125-11.222656-11.628906-11.222656-6.957032 0-11.628906 4.507813-11.628906 11.222656 0 15.683594.617187 33.152344 1.210937 50.046876.597656 16.933593 1.214844 34.445312 1.214844 50.1875 0 4.628906 3.871093 7.992187 9.203125 7.992187zm0 0"/>
                                    </svg>
                                </div>
                                <div class="content">
                                    <div class="text">تیکت های رویت نشده</div>
                                    <div class="number">
                                        <span class="number count-to" data-from="0" data-to="<?php echo AnalyticsData::get_instance()::unseenCount(); ?>" data-speed="2000" data-fresh-interval="700">
                                             <?php echo AnalyticsData::get_instance()::unseenCount(); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <svg height="45px" viewBox="0 1 511 511.99987" width="45px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m453.679688 471.6875c1.421874 1.183594 3.144531 1.757812 4.859374 1.757812 2.179688 0 4.34375-.933593 5.847657-2.738281 2.6875-3.226562 2.25-8.023437-.976563-10.707031l-121.234375-100.9375c-3.226562-2.6875-8.019531-2.25-10.707031.976562-2.6875 3.226563-2.25 8.019532.976562 10.707032zm0 0"/>
                                        <path d="m181.480469 360.039062c-2.6875-3.226562-7.480469-3.664062-10.707031-.976562l-121.234376 100.9375c-3.226562 2.6875-3.664062 7.480469-.976562 10.707031 1.5 1.808594 3.664062 2.738281 5.847656 2.738281 1.714844 0 3.4375-.574218 4.859375-1.757812l121.234375-100.9375c3.226563-2.691406 3.664063-7.484375.976563-10.710938zm0 0"/>
                                        <path d="m509.707031 181.523438-93.347656-77.722657c-3.230469-2.683593-8.019531-2.246093-10.710937.980469-2.683594 3.226562-2.246094 8.019531.980468 10.707031l86.332032 71.878907-183.925782 153.132812c-30.453125 25.371094-74.667968 25.371094-105.132812 0l-183.914063-153.132812 178.378907-148.523438 5.535156-4.609375c30.460937-25.371094 74.679687-25.371094 105.132812 0l72.757813 60.578125c3.226562 2.683594 8.019531 2.25 10.707031-.980469 2.6875-3.226562 2.25-8.019531-.976562-10.707031l-72.753907-60.574219c-36.09375-30.066406-88.496093-30.070312-124.601562 0l-190.777344 158.851563c-1.761719 1.390625-2.890625 3.546875-2.890625 5.964844v269.339843c0 30.488281 24.804688 55.292969 55.292969 55.292969h35.441406c4.199219 0 7.601563-3.402344 7.601563-7.601562 0-4.199219-3.402344-7.605469-7.601563-7.605469h-35.441406c-22.105469 0-40.085938-17.980469-40.085938-40.085938v-253.117187l178.460938 148.597656c18.054687 15.035156 40.175781 22.546875 62.304687 22.546875 22.121094 0 44.25-7.515625 62.292969-22.546875l178.46875-148.59375v253.113281c0 22.105469-17.980469 40.085938-40.085937 40.085938h-335.5c-4.199219 0-7.605469 3.40625-7.605469 7.605469 0 4.199218 3.40625 7.601562 7.605469 7.601562h335.5c30.488281 0 55.292968-24.804688 55.292968-55.292969v-269.109375c.070313-2.296875-.90625-4.550781-2.734375-6.074218zm0 0"/>
                                    </svg>
                                </div>
                                <div class="content">
                                    <div class="text">تیکت های رویت شده</div>
                                    <div class="number count-to" data-from="0" data-to="<?php echo AnalyticsData::get_instance()::nResponseCount(); ?>" data-speed="2000" data-fresh-interval="700">
                                        <?php echo AnalyticsData::get_instance()::nResponseCount(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <svg height="45px" viewBox="0 0 512 512.0019" width="45px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m458.039062 473.445312c2.179688 0 4.34375-.929687 5.847657-2.738281 2.6875-3.226562 2.25-8.019531-.976563-10.707031l-121.234375-100.9375c-3.226562-2.6875-8.019531-2.25-10.707031.976562-2.6875 3.226563-2.25 8.023438.976562 10.710938l121.234376 100.9375c1.421874 1.183594 3.144531 1.757812 4.859374 1.757812zm0 0"/>
                                        <path d="m170.273438 359.0625-121.234376 100.9375c-3.226562 2.6875-3.664062 7.480469-.976562 10.707031 1.5 1.808594 3.664062 2.738281 5.847656 2.738281 1.714844 0 3.4375-.574218 4.859375-1.757812l121.234375-100.941406c3.226563-2.683594 3.664063-7.480469.976563-10.707032-2.683594-3.226562-7.480469-3.664062-10.707031-.976562zm0 0"/>
                                        <path d="m511.945312 187.367188c0-2.257813-1.003906-4.398438-2.738281-5.84375l-53.535156-44.574219v-48.796875c0-34.601563-28.148437-62.75-62.75-62.75h-71.230469l-3.421875-2.851563c-36.09375-30.066406-88.496093-30.066406-124.601562 0l-3.421875 2.851563h-15.371094c-4.199219 0-7.601562 3.402344-7.601562 7.601562 0 4.199219 3.402343 7.605469 7.601562 7.605469h218.046875c26.214844 0 47.542969 21.328125 47.542969 47.542969v52.320312.003906 90.183594l-131.929688 109.84375c-30.453125 25.371094-74.667968 25.367188-105.136718-.003906l-131.914063-109.839844v-90.179687c0-.003907 0-.007813 0-.007813v-52.320312c0-26.214844 21.332031-47.542969 47.554687-47.542969h25.421876c4.199218 0 7.605468-3.40625 7.605468-7.605469 0-4.199218-3.40625-7.601562-7.605468-7.601562h-25.421876c-34.605468 0-62.761718 28.148437-62.761718 62.75v48.796875l-53.535156 44.578125c-1.71875 1.429687-2.7187505 3.546875-2.7343755 5.78125 0 .023437-.0078125.039062-.0078125.0625v269.339844c0 30.488281 24.804688 55.289062 55.292969 55.289062h340.578125c4.199218 0 7.601562-3.402344 7.601562-7.601562 0-4.199219-3.402344-7.601563-7.601562-7.601563h-340.578125c-22.105469 0-40.085938-17.984375-40.085938-40.085937v-253.121094l43.832031 36.5c.003907 0 .003907 0 .003907.003906l134.625 112.09375c18.058593 15.035156 40.175781 22.550781 62.304687 22.546875 22.121094 0 44.25-7.515625 62.292969-22.546875l134.609375-112.074219c.023438-.019531.042969-.035156.0625-.054687l43.796875-36.464844v253.113281c0 22.101563-17.980469 40.085938-40.085937 40.085938h-30.363282c-4.199218 0-7.601562 3.402343-7.601562 7.601562s3.402344 7.605469 7.601562 7.605469h30.363282c30.488281 0 55.292968-24.804688 55.292968-55.292969v-269.277343c0-.019532.003906-.039063.003906-.0625zm-216.359374-161.964844h-79.226563c24.621094-13.574219 54.609375-13.574219 79.226563 0zm-239.308594 131.335937v61.261719l-36.789063-30.628906zm399.394531 61.257813v-61.257813l36.789063 30.628907zm0 0"/>
                                        <path d="m367.484375 210.625h-223.019531c-4.199219 0-7.605469 3.402344-7.605469 7.601562 0 4.199219 3.40625 7.605469 7.605469 7.605469h223.019531c4.199219 0 7.605469-3.40625 7.605469-7.605469 0-4.199218-3.40625-7.601562-7.605469-7.601562zm0 0"/>
                                        <path d="m367.484375 254.78125h-223.019531c-4.199219 0-7.605469 3.40625-7.605469 7.605469s3.40625 7.601562 7.605469 7.601562h223.019531c4.199219 0 7.605469-3.402343 7.605469-7.601562s-3.40625-7.605469-7.605469-7.605469zm0 0"/>
                                        <path d="m367.484375 122.308594h-223.019531c-4.199219 0-7.605469 3.40625-7.605469 7.605468 0 4.195313 3.40625 7.601563 7.605469 7.601563h223.019531c4.199219 0 7.605469-3.40625 7.605469-7.601563 0-4.199218-3.40625-7.605468-7.605469-7.605468zm0 0"/>
                                        <path d="m367.484375 166.46875h-55.753906c-4.199219 0-7.601563 3.402344-7.601563 7.601562 0 4.199219 3.402344 7.601563 7.601563 7.601563h55.753906c4.199219 0 7.601563-3.402344 7.601563-7.601563 0-4.199218-3.402344-7.601562-7.601563-7.601562zm0 0"/>
                                        <path d="m144.464844 181.671875h141.921875c4.199219 0 7.601562-3.402344 7.601562-7.601563 0-4.199218-3.402343-7.601562-7.601562-7.601562h-141.921875c-4.199219 0-7.605469 3.402344-7.605469 7.601562 0 4.199219 3.40625 7.601563 7.605469 7.601563zm0 0"/>
                                    </svg>
                                </div>
                                <div class="content">
                                    <div class="text">تیکت های باز</div>
                                    <div class="number">
                                        <span class="number count-to" data-from="0" data-to="<?php echo AnalyticsData::get_instance()::openedCount(); ?>" data-speed="2000" data-fresh-interval="700">
                                            <?php echo AnalyticsData::get_instance()::openedCount(); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <svg height="45px" viewBox="0 0 512 512.00051" width="45px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m453.179688 471.6875c1.421874 1.183594 3.144531 1.761719 4.859374 1.761719 2.179688 0 4.34375-.933594 5.847657-2.742188 2.6875-3.226562 2.25-8.019531-.980469-10.707031l-121.230469-100.9375c-3.226562-2.6875-8.019531-2.25-10.710937.980469-2.683594 3.226562-2.246094 8.019531.980468 10.707031zm0 0"/>
                                        <path d="m53.90625 473.445312c1.714844 0 3.441406-.574218 4.863281-1.757812l121.234375-100.941406c3.226563-2.683594 3.664063-7.480469.976563-10.707032-2.6875-3.226562-7.480469-3.664062-10.707031-.976562l-121.230469 100.9375c-3.230469 2.6875-3.667969 7.480469-.980469 10.707031 1.5 1.808594 3.667969 2.738281 5.84375 2.738281zm0 0"/>
                                        <path d="m144.464844 225.832031h160.171875c4.199219 0 7.601562-3.40625 7.601562-7.605469 0-4.199218-3.402343-7.601562-7.601562-7.601562h-160.171875c-4.199219 0-7.605469 3.402344-7.605469 7.601562 0 4.199219 3.40625 7.605469 7.605469 7.605469zm0 0"/>
                                        <path d="m367.484375 254.78125h-223.019531c-4.199219 0-7.605469 3.40625-7.605469 7.605469s3.40625 7.601562 7.605469 7.601562h223.019531c4.203125 0 7.605469-3.402343 7.605469-7.601562s-3.40625-7.605469-7.605469-7.605469zm0 0"/>
                                        <path d="m144.464844 137.515625h111.511718c4.199219 0 7.601563-3.40625 7.601563-7.605469 0-4.195312-3.402344-7.601562-7.601563-7.601562h-111.511718c-4.199219 0-7.605469 3.40625-7.605469 7.601562 0 4.199219 3.40625 7.605469 7.605469 7.605469zm0 0"/>
                                        <path d="m211.617188 174.070312c0 4.199219 3.40625 7.601563 7.605468 7.601563h55c4.199219 0 7.601563-3.402344 7.601563-7.601563 0-4.199218-3.402344-7.605468-7.601563-7.605468h-55c-4.199218 0-7.605468 3.40625-7.605468 7.605468zm0 0"/>
                                        <path d="m144.464844 181.671875h49.410156c4.199219 0 7.605469-3.402344 7.605469-7.601563 0-4.199218-3.40625-7.605468-7.605469-7.605468h-49.410156c-4.199219 0-7.605469 3.40625-7.605469 7.605468 0 4.199219 3.40625 7.601563 7.605469 7.601563zm0 0"/>
                                        <path d="m426.390625 62.1875-40.75 95.085938-36.148437-43.046876c-2.699219-3.214843-7.492188-3.632812-10.710938-.933593-3.214844 2.703125-3.632812 7.5-.929688 10.714843l44.089844 52.503907c1.457032 1.734375 3.59375 2.714843 5.820313 2.714843.367187 0 .738281-.027343 1.113281-.082031 2.609375-.386719 4.835938-2.097656 5.875-4.527343l45.617188-106.441407c1.65625-3.859375-.132813-8.328125-3.992188-9.984375-3.859375-1.652344-8.328125.136719-9.984375 3.996094zm0 0"/>
                                        <path d="m505.402344 178.355469-15.816406-13.167969c7.828124-15.476562 12.21875-32.890625 12.21875-51.136719 0-20.632812-5.59375-40.839843-16.167969-58.429687-2.167969-3.601563-6.839844-4.761719-10.4375-2.597656-3.597657 2.164062-4.761719 6.835937-2.597657 10.433593 9.15625 15.222657 13.996094 32.71875 13.996094 50.589844 0 46.890625-33.332031 87.472656-79.261718 96.488281-6.246094 1.230469-12.664063 1.855469-19.070313 1.855469-54.222656 0-98.335937-44.117187-98.335937-98.34375 0-54.21875 44.113281-98.332031 98.335937-98.332031 6.40625 0 12.820313.625 19.070313 1.855468 17.800781 3.496094 34.285156 11.886719 47.675781 24.273438 3.082031 2.847656 7.894531 2.660156 10.746093-.421875 2.851563-3.082031 2.660157-7.894531-.421874-10.746094-15.460938-14.296875-34.503907-23.988281-55.0625-28.027343-7.214844-1.417969-14.617188-2.140626-22.007813-2.140626-25.777344 0-49.566406 8.640626-68.648437 23.167969l-1.347657-1.125c-36.09375-30.066406-88.496093-30.066406-124.601562 0l-3.417969 2.851563h-71.210938c-34.605468 0-62.761718 28.148437-62.761718 62.75v49.304687l-51.441406 42.828125c-.152344.0625-.304688.125-.457032.199219-2.671875 1.25-4.37499975 3.933594-4.37499975 6.882813v209.113281c0 4.199219 3.40234375 7.601562 7.60156275 7.601562s7.605469-3.402343 7.605469-7.601562v-192.886719l178.460937 148.59375c18.050781 15.03125 40.175781 22.550781 62.300781 22.546875 22.125 0 44.25-7.515625 62.292969-22.546875l178.46875-148.59375v253.113281c0 22.105469-17.980469 40.085938-40.085937 40.085938h-401.355469c-22.105469 0-40.085938-17.980469-40.085938-40.085938v-29.8125c0-4.199219-3.40625-7.601562-7.605469-7.601562-4.195312 0-7.601562 3.402343-7.601562 7.601562v29.8125c0 30.488281 24.804688 55.292969 55.292969 55.292969h401.355469c30.488281 0 55.292968-24.804688 55.292968-55.292969v-269.132812c0-.003907 0-.007813 0-.011719.09375-3.683594-1.046875-4.632812-6.539062-9.207031zm-209.820313-152.953125h-79.222656c24.621094-13.574219 54.609375-13.574219 79.222656 0zm-239.304687 131.839844v60.757812l-36.484375-30.378906zm252.257812 183.261718c-30.453125 25.367188-74.667968 25.367188-105.132812-.003906l-131.917969-109.839844v-142.507812c0-26.21875 21.332031-47.546875 47.554687-47.546875h73.988282.027344 108.695312c-16.84375 19.8125-27.023438 45.460937-27.023438 73.445312 0 62.609375 50.933594 113.546875 113.539063 113.546875 7.390625 0 14.796875-.71875 22.003906-2.140625 10.730469-2.105469 20.855469-5.726562 30.195313-10.578125v15.777344zm147.136719-122.507812v-12.601563c10.132813-7.5 18.941406-16.625 26.0625-26.957031 3.324219 2.765625 7.347656 6.117188 10.726563 8.929688zm0 0"/>
                                    </svg>
                                </div>
                                <div class="content">
                                    <div class="text">تیکت های اتمام یافته</div>
                                    <div class="number">
                                         <span class="number count-to" data-from="0" data-to="<?php echo AnalyticsData::get_instance()::closedCount(); ?>" data-speed="2000" data-fresh-interval="700">
                                             <?php echo AnalyticsData::get_instance()::closedCount(); ?>
                                         </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix open-list">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="header">
                                    <h4><strong> لیست </strong>   تیکت های باز </h4>
                                </div>
                                <div class="table">
                                    <ul>
                                        <?php
                                        if ( !empty( AnalyticsData::openTicketLists() ) ){
                                            $item_key = 0;
                                            foreach ( AnalyticsData::openTicketLists() as $key => $val  ){
                                                $post = get_post( $key );
                                                ?>
                                                <li class="open-item" data-item_key="<?php echo $item_key; ?>">
                                                    <p> <?php echo Functions::indexChecker( $post ,'post_title' , 'بدون عنوان'); ?> </p>
                                                    <ul id="<?php echo $item_key; ?>">
                                                        <?php
                                                        foreach ( $val as $item ) {
                                                            $u = Functions::getUser( (int) $item->creator );
                                                            ?>
                                                            <li>
                                                                <a target="_blank" href="<?php echo home_url().'/ticket/single/'.$item->id ?>">  <?php echo $item->id; ?>  </a>
                                                                <time> <?php echo date_i18n('Y/m/d' , strtotime($item->created_date ) ); ?> </time>
                                                                <i> <?php echo $u->first_name .' '.$u->last_name; ?> </i>
                                                                <span> <?php echo Functions::statusesTranslate( $item->status ); ?> </span>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <span> <?php echo count( $val ); ?> </span>
                                                </li>
                                                <?php $item_key++; } } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row clearfix salary-tickets">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">

                            <div class="body">
                                <div class="header">
                                    <h4><strong> آمار </strong> کلی </h4>
                                </div>
                                <div class="chart" >
                                    <div id="stack-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix reply-count">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="header">
                                    <h4><strong> میانگین </strong> تعداد پاسخ ها </h4>
                                </div>
                                <div class="chart">
                                    <div id="reply-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row clearfix destination-list">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="body">
                                <div class="header">
                                    <h4><strong> واحد </strong>  ها </h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        $destinationPercent = AnalyticsData::get_instance()->destinationPercent();

                                        if( !empty( $destinationPercent ) ){
                                            $sum = array_sum($destinationPercent);
                                            if ( $sum > 0 ){
                                                foreach ( $destinationPercent as $key  => $val ){  ?>
                                                    <tr>
                                                        <td><?php echo $i;?> </td>
                                                        <td><?php echo Functions::destinationTranslate( $key ); ?></td>
                                                        <td><span><?php echo $val; ?></span></td>
                                                        <td><?php echo round(( $val/$sum )*100 );?>% </td>
                                                    </tr>
                                        <?php $i++; } } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="card">
                            <div class="body">
                                <div class="header">
                                    <h4><strong> دوره </strong> ها </h4>
                                </div>
                                <div class="chart">
                                    <div id="course-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row clearfix line-chart">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="header">
                                    <h4><strong> میانگین </strong> زمان پاسخگویی </h4>
                                </div>
                                <div class="chart">
                                    <div id="salary-chart" > </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix users-list">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="body">
                                <div class="header">
                                    <h4><strong> پرسشگر </strong> ترین ها </h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table m-b-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>تصویر</th>
                                            <th>نام</th>
                                            <th>تلفن</th>
                                            <th>تعداد</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ( AnalyticsData::get_instance()::mostStudentCreator() as $item ){  ?>
                                            <tr>
                                                <td style="width: 25px;"><?php echo $i; ?></td>
                                                <td style="width: 60px;"><img  src="<?php echo $item['avatar']; ?>" alt="" class="rounded"></td>
                                                <td><?php echo $item['name']; ?></td>
                                                <td class="hidden-xs"><?php echo $item['phone']; ?></td>
                                                <td><span class="badge badge-success"><?php echo $item['count']; ?></span></td>
                                            </tr>
                                        <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 users-list questioners-list">
                        <div class="card">
                            <div class="body">
                                <div class="header">
                                    <h4><strong> پاسخگو </strong> ترین ها </h4>
                                    <div class="today-status">
                                        <span> امروز </span>
                                        <label class="switch">
                                            <input type="checkbox" id="questioners-reply-count">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table m-b-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>تصویر</th>
                                            <th>نام</th>
                                            <th>تلفن</th>
                                            <th>تعداد</th>
                                        </tr>
                                        </thead>
                                        <tbody class="questioners-reply-count-all">
                                            <?php
                                            $i = 1;
                                                foreach ( AnalyticsData::get_instance()::mostSupportReplier( false ) as $item ){  ?>
                                                    <tr>
                                                        <td style="width: 25px;"><?php echo $i; ?></td>
                                                        <td style="width: 60px;"><img src="<?php echo $item['avatar']; ?>" alt="" class="rounded"></td>
                                                        <td><?php echo $item['name']; ?></td>
                                                        <td class="hidden-xs"><?php echo $item['phone']; ?></td>
                                                        <td><span class="badge badge-success"><?php echo $item['count']; ?></span></td>
                                                    </tr>
                                                    <?php $i++;
                                                }
                                            ?>
                                        </tbody>
                                        <tbody class="questioners-reply-count-today" style="display: none">
                                            <?php
                                                $i = 1;
                                                foreach ( AnalyticsData::get_instance()::mostSupportReplier( true ) as $item ){  ?>
                                                    <tr>
                                                        <td style="width: 25px;"><?php echo $i; ?></td>
                                                        <td style="width: 60px;"><img src="<?php echo $item['avatar']; ?>" alt="" class="rounded"></td>
                                                        <td><?php echo $item['name']; ?></td>
                                                        <td class="hidden-xs"><?php echo $item['phone']; ?></td>
                                                        <td><span class="badge badge-success"><?php echo $item['count']; ?></span></td>
                                                    </tr>
                                                    <?php $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
    }



}

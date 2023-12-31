<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iide
 */

get_header();
?>

<div class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 lg:w-5/12">
            <div class="hero-content">
              <h1 class="mb-3 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px]">
			  Video Lectures + Live Sessions
Advanced Digital Marketing Training
              </h1>
              <p class="mb-8 max-w-[480px] text-base text-body-color">
              Upgrade your skill set with IIDE’s certified digital marketing online course and boost your career in just 4 months.
              </p>
              <ul class="flex flex-wrap items-center">
                <li>
                  <a href="javascript:void(0)" class="inline-flex items-center justify-center rounded-lg bg-primary py-4 px-6 text-center text-base font-normal text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                    Get Started
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="inline-flex items-center justify-center py-4 px-6 text-center text-base font-normal text-body-color hover:text-primary sm:px-10 lg:px-8 xl:px-10">
                    <span class="mr-2">
                      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="11" fill="#3056D3"></circle>
                        <rect x="6.90906" y="13.3636" width="8.18182" height="1.63636" fill="white"></rect>
                        <rect x="10.1818" y="6" width="1.63636" height="4.09091" fill="white"></rect>
                        <path d="M11 12.5454L13.8343 9.47726H8.16576L11 12.5454Z" fill="white"></path>
                      </svg>
                    </span>
                    View Course
                  </a>
                </li>
              </ul>
              <div class="clients pt-16">
                <h6 class="mb-2 flex items-center text-xs font-normal text-body-color">
                  Some Of Our Clients
                  <span class="ml-2 inline-block h-[1px] w-8 bg-body-color"></span>
                </h6>
                <div class="flex items-center">
                  <div class="mr-4 w-full py-3">
                    <img src="https://iide.co/wp-content/uploads/2021/01/Digital-education-institute-top-companies-times-of-india-oneplus.png" alt="ayroui">
                  </div>
                  <div class="mr-4 w-full py-3">
                    <img src="https://iide.co/wp-content/uploads/2021/01/Digital-education-institute-top-companies-zomato-dentsu-aegis.png" alt="graygrids">
                  </div>
                  <div class="mr-4 w-full py-3">
                    <img src="https://iide.co/wp-content/uploads/2021/01/Digital-education-institute-top-companies-Johnson-Johnson-np-patel.png" alt="uideck">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hidden px-4 lg:block lg:w-1/12"></div>
          <div class="w-full px-4 lg:w-6/12">
            <div class="lg:ml-auto lg:text-right">
              <div class="relative z-10 inline-block pt-11 lg:pt-0">
                <img src="http://localhost/iide/wp-content/themes/iide/theme/assets/hero-image-01.png" alt="hero" class="max-w-full lg:ml-auto">
                <span class="absolute -left-8 -bottom-8 z-[-1]">
                  <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
get_footer();

    <?php 
        /* Template Name: single-school */
        /* Template Post Type: post */
        get_header();
    ?>

    <main class="sport-school main">
        <div class="container">
            <div class="sport-school__wrap">
                <h1 class="header-title sport-school__header sport-school__header-mobile">спортшкола “<?php the_title(); ?>”</h1>
                <?php $image = get_field('photo'); ?>
                <img class="sport-school__photo" src="<?php echo $image['url']; ?>"
                        alt="<?php echo $image['alt']; ?>">
                <div class="sport-school__content">
                    <h1 class="header-title sport-school__header">спортшкола “<?php the_title(); ?>”</h1>
                    <div class="sport-school__descr"><?php the_content(); ?></div>
                </div>
            </div>
        </div>
        <div class="sport-school__contact">
            <h3 class="title sport-school-contact__header">Контакты школы</h3>
            <div class="sport-school-contact__wrap">
                <div class="sport-school-contact__block">
                    <svg class="sport-school-contact__icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 0C6.00606 0 2.75676 3.2493 2.75676 7.2432C2.75676 12.1998 9.23875 19.4763 9.51473 19.7836C9.77395 20.0723 10.2265 20.0718 10.4853 19.7836C10.7613 19.4763 17.2432 12.1998 17.2432 7.2432C17.2432 3.2493 13.9939 0 10 0ZM10 10.8875C7.99055 10.8875 6.35578 9.25266 6.35578 7.2432C6.35578 5.23375 7.99059 3.59898 10 3.59898C12.0094 3.59898 13.6442 5.23379 13.6442 7.24324C13.6442 9.2527 12.0094 10.8875 10 10.8875Z"
                            fill="#0077B6" />
                    </svg>
                    <p class="sport-school-contact__info"><?php the_field('address'); ?></p>
                </div>
                <div class="sport-school-contact__block">
                    <svg class="sport-school-contact__icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_9_280)">
                            <path
                                d="M17.2324 13.9201C16.0242 12.8867 14.7981 12.2608 13.6047 13.2926L12.8921 13.9162C12.3707 14.3689 11.4014 16.484 7.65347 12.1726C3.90635 7.86665 6.1362 7.19621 6.65835 6.74743L7.37484 6.12304C8.56196 5.08889 8.11396 3.78704 7.25776 2.44694L6.74108 1.63524C5.88098 0.29826 4.9444 -0.579789 3.75415 0.452796L3.11103 1.01475C2.58498 1.39797 1.11454 2.64363 0.757861 5.01006C0.328592 7.84948 1.68274 11.101 4.78518 14.6686C7.88372 18.2378 10.9175 20.0306 13.7912 19.9993C16.1795 19.9736 17.6219 18.692 18.073 18.2261L18.7184 17.6633C19.9056 16.6315 19.168 15.581 17.959 14.5453L17.2324 13.9201Z"
                                fill="#0077B6" />
                        </g>
                        <defs>
                            <clipPath id="clip0_9_280">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="sport-school-contact__info"><a href="callto:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></p>
                </div>
                <div class="sport-school-contact__block">
                    <svg class="sport-school-contact__block" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_9_265)">
                            <path
                                d="M19.8239 3.97363L13.7583 10.0002L19.8239 16.0267C19.9335 15.7975 20 15.5441 20 15.2736V4.72672C20 4.45613 19.9335 4.20281 19.8239 3.97363Z"
                                fill="#0077B6" />
                            <path
                                d="M18.2422 2.96875H1.75785C1.48726 2.96875 1.23394 3.03527 1.00476 3.14492L8.75722 10.8583C9.44269 11.5438 10.5574 11.5438 11.2428 10.8583L18.9953 3.14492C18.7661 3.03527 18.5128 2.96875 18.2422 2.96875Z"
                                fill="#0077B6" />
                            <path
                                d="M0.176172 3.97363C0.0665234 4.20281 0 4.45613 0 4.72672V15.2736C0 15.5442 0.0665234 15.7975 0.176172 16.0267L6.24176 10.0002L0.176172 3.97363Z"
                                fill="#0077B6" />
                            <path
                                d="M12.9297 10.8286L12.0714 11.6869C10.9293 12.8291 9.07078 12.8291 7.92863 11.6869L7.07035 10.8286L1.00476 16.8551C1.23394 16.9648 1.48726 17.0313 1.75785 17.0313H18.2422C18.5128 17.0313 18.7661 16.9648 18.9953 16.8551L12.9297 10.8286Z"
                                fill="#0077B6" />
                        </g>
                        <defs>
                            <clipPath id="clip0_9_265">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <a class="sport-school-contact__info" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                </div>
                <div class="sport-school-contact__block">
                    <svg class="sport-school-contact__icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 0C11.0218 0 7.20644 1.58035 4.3934 4.3934C1.58035 7.20644 0 11.0218 0 15C0 18.9782 1.58035 22.7936 4.3934 25.6066C7.20644 28.4196 11.0218 30 15 30C18.9782 30 22.7936 28.4196 25.6066 25.6066C28.4196 22.7936 30 18.9782 30 15C30 11.0218 28.4196 7.20644 25.6066 4.3934C22.7936 1.58035 18.9782 0 15 0V0ZM20.7667 19.9167C20.7667 22.3667 19.4333 25.4167 14 27.75C14.5 20.8 9.8 21.6 8.66667 19.4167C8.76988 18.5134 9.09879 17.6507 9.62307 16.9079C10.1473 16.1652 10.8501 15.5664 11.6667 15.1667C9.08028 14.723 6.66821 13.5689 4.7 11.8333C4.78333 12.6167 5.165 13.34 5.76667 13.85C4.46319 13.3587 3.33693 12.4878 2.53333 11.35C3.32796 8.72733 4.9172 6.41604 7.08163 4.73525C9.24606 3.05446 11.8789 2.08708 14.6167 1.96667C13.2167 4.26667 12.1167 8.85 14.6167 11.25C12.05 11.6667 10.4333 8.33333 9.01667 9.65C7.13333 11.4167 9.56667 13.8333 14.7167 14.7833C20.2 15.7667 20.8167 17.4167 20.7667 19.9167ZM23 13.25C22.4667 11.4 24.0333 9.53333 25.8167 8.01667C26.9304 9.62203 27.6393 11.4729 27.8831 13.4115C28.1269 15.3501 27.8982 17.3189 27.2167 19.15C25.9333 16 23.6 15.2833 23 13.2V13.25Z"
                            fill="#0077B6" />
                    </svg>
                    <a class="sport-school-contact__info" href="<?php the_field('site'); ?>"><?php the_field('site'); ?></a>
                </div>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>
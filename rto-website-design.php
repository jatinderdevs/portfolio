<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="RTO Website Design Melbourne | ASQA Compliant Websites | JatinderDev">
    <meta name="keywords"
        content="RTO website design Melbourne, ASQA compliant website, VET college website Melbourne, registered training organisation website, RTO web developer Melbourne, ASQA website requirements, VET provider website, RTO digital marketing Melbourne, training organisation website design, CRICOS website Melbourne">
    <meta name="description"
        content="Specialist RTO website design in Melbourne. ASQA-compliant, enrolment-optimised websites for registered training organisations and VET colleges. 3+ years VET industry experience. Contact JatinderDev today.">
    <meta name="image" content="https://jatinderdev.com.au/img/website.webp">
    <meta name="url" content="https://jatinderdev.com.au/rto-website-design-melbourne">
    <meta property="og:title" content="RTO Website Design Melbourne | ASQA Compliant Websites | JatinderDev">
    <meta property="og:description"
        content="Specialist RTO website design in Melbourne. ASQA-compliant websites for registered training organisations and VET colleges. 3+ years VET industry experience.">
    <meta property="og:image" content="https://jatinderdev.com.au/img/website.webp">
    <meta property="og:url" content="https://jatinderdev.com.au/rto-website-design-melbourne.php">
    <meta name="robots" content="index, follow">

    <!-- Schema Markup for Local SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "JatinderDev",
        "description": "Specialist RTO and VET college website design in Melbourne. ASQA-compliant web development.",
        "url": "https://jatinderdev.com.au",
        "telephone": "+61499167608",
        "email": "contact@jatinderdev.com.au",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Melbourne",
            "addressRegion": "VIC",
            "addressCountry": "AU"
        },
        "areaServed": "Melbourne, Victoria, Australia",
        "serviceType": "RTO Website Design, VET College Website Development, ASQA Compliant Websites"
    }
    </script>

    <title>RTO Website Design Melbourne | ASQA Compliant Websites | JatinderDev</title>
    <?php include_once('include/linkfiles.php') ?>

    <style>
    /* ===== RTO PAGE SPECIFIC STYLES ===== */

    /* Hero Section */
    .rto-hero {

        padding: 2rem 0 4rem;
        position: relative;
        overflow: hidden;
    }

    .rto-hero::before {
        content: '';
        position: absolute;
        top: -80px;
        right: -80px;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: rgba(250, 173, 27, 0.07);
        pointer-events: none;
    }

    .rto-hero::after {
        content: '';
        position: absolute;
        bottom: -100px;
        left: -60px;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(250, 173, 27, 0.05);
        pointer-events: none;
    }

    .rto-hero h1 {
        color: var(--dark);
        padding-top: 1rem;
    }

    .rto-hero p {
        color: rgb(52 76 54 / 88%);
    }

    .rto-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #344c3652;
        /* border: 1px solid rgba(250, 173, 27, 0.4); */
        color: #344c36;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 6px 16px;
        border-radius: 30px;
        margin-bottom: 1.2rem;
    }

    .rto-badge i {
        font-size: 10px;
    }

    /* Stats bar */
    .stats-bar {
        background: var(--yellow);
        padding: 1.5rem 0;
    }

    .stat-item {
        text-align: center;
        padding: 0 1rem;
    }

    .stat-item h3 {
        font-size: 2rem;
        font-weight: 700;
        color: var(--dark);
        margin: 0;
        line-height: 1;
    }

    .stat-item p {
        font-size: 12px;
        font-weight: 600;
        color: var(--dark);
        margin: 4px 0 0;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .stat-divider {
        width: 1px;
        height: 40px;
        background: rgba(52, 76, 54, 0.3);
    }

    /* Why RTO Section */
    .rto-why {
        background: #fff;
        padding: 5rem 0;
    }

    .label-tag {
        font-size: 12px;
        font-weight: 600;
        color: var(--yellow);
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* Compliance checklist card */
    .compliance-card {
        background: var(--dark);
        border-radius: 16px;
        padding: 2rem;
        height: 100%;
    }

    .compliance-card h4 {
        color: var(--yellow);
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 1.2rem;
    }

    .check-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .check-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: rgba(255, 255, 255, 0.85);
        font-size: 13px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        line-height: 1.5;
    }

    .check-list li:last-child {
        border-bottom: none;
    }

    .check-list li .ci {
        color: var(--yellow);
        font-size: 14px;
        margin-top: 1px;
        flex-shrink: 0;
    }

    /* Pain point cards */
    .pain-card {
        background: #f9f9fb;
        border: 1px solid #ebebeb;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
    }

    .pain-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--yellow);
        border-radius: 4px 0 0 4px;
    }

    .pain-card h5 {
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 6px;
        font-size: 15px;
    }

    .pain-card p {
        margin: 0;
        font-size: 13px;
    }

    .pain-icon {
        width: 42px;
        height: 42px;
        background: var(--yellow);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--dark);
        font-size: 18px;
        margin-bottom: 12px;
    }

    /* Services grid */
    .rto-services {
        background: #f9f9fb;
    }

    .rto-service-card {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 14px;
        padding: 1.8rem 1.5rem;
        margin-bottom: 24px;
        transition: all 0.35s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .rto-service-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: var(--yellow);
        transition: width 0.35s ease;
    }

    .rto-service-card:hover::after {
        width: 100%;
    }

    .rto-service-card:hover {
        box-shadow: 0 8px 30px rgba(52, 76, 54, 0.12);
        transform: translateY(-3px);
        border-color: rgba(250, 173, 27, 0.3);
    }

    .service-icon-wrap {
        width: 52px;
        height: 52px;
        background: var(--dark);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--yellow);
        font-size: 22px;
        margin-bottom: 1rem;
    }

    .rto-service-card h5 {
        font-weight: 700;
        color: var(--dark);
        font-size: 15px;
        margin-bottom: 8px;
    }

    .rto-service-card p {
        font-size: 13px;
        margin: 0;
        line-height: 1.6;
    }

    /* Process section */
    .rto-process {
        background: var(--dark);
        padding: 5rem 0;
    }

    .rto-process .subHeading {
        color: #fff;
    }

    .rto-process .label-tag {
        color: var(--yellow);
    }

    .process-step {
        display: flex;
        gap: 20px;
        margin-bottom: 2.5rem;
        align-items: flex-start;
    }

    .step-num {
        width: 48px;
        height: 48px;
        background: var(--yellow);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        font-weight: 700;
        color: var(--dark);
        flex-shrink: 0;
    }

    .step-content h5 {
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .step-content p {
        color: rgba(255, 255, 255, 0.65);
        font-size: 13px;
        margin: 0;
        line-height: 1.6;
    }

    .step-connector {
        width: 2px;
        height: 24px;
        background: rgba(250, 173, 27, 0.3);
        margin-left: 23px;
        margin-top: -16px;
        margin-bottom: 4px;
    }

    /* Pricing */
    .rto-pricing {
        background: #fff;
        padding: 5rem 0;
    }

    .price-card {
        border: 2px solid #e8e8e8;
        border-radius: 16px;
        padding: 2rem 1.5rem;
        margin-bottom: 24px;
        text-align: center;
        transition: all 0.35s;
        position: relative;
        overflow: hidden;
    }

    .price-card.featured {
        border-color: var(--yellow);
        background: var(--dark);
    }

    .price-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(52, 76, 54, 0.12);
    }

    .featured-badge {
        position: absolute;
        top: 14px;
        right: -22px;
        background: var(--yellow);
        color: var(--dark);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 4px 30px;
        transform: rotate(45deg);
    }

    .price-card .plan-name {
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--yellow);
        margin-bottom: 8px;
    }

    .price-card.featured .plan-name {
        color: var(--yellow);
    }

    .price-val {
        font-size: 2.4rem;
        font-weight: 700;
        color: var(--dark);
        line-height: 1;
        margin-bottom: 4px;
    }

    .price-card.featured .price-val {
        color: #fff;
    }

    .price-period {
        font-size: 12px;
        color: #888;
        margin-bottom: 1.5rem;
    }

    .price-card.featured .price-period {
        color: rgba(255, 255, 255, 0.55);
    }

    .price-features {
        list-style: none;
        padding: 0;
        margin: 0 0 1.8rem;
        text-align: left;
    }

    .price-features li {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-size: 13px;
        color: #444;
        padding: 7px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .price-card.featured .price-features li {
        color: rgba(255, 255, 255, 0.8);
        border-bottom-color: rgba(255, 255, 255, 0.1);
    }

    .price-features li i {
        color: var(--yellow);
        margin-top: 2px;
        flex-shrink: 0;
    }

    /* FAQ section */
    .rto-faq {
        background: #f9f9fb;
    }

    .faq-item {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 12px;
        margin-bottom: 12px;
        overflow: hidden;
    }

    .faq-question {
        padding: 1.1rem 1.4rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        color: var(--dark);
        font-weight: 600;
        font-size: 14px;
    }

    .faq-question i {
        color: var(--yellow);
        font-size: 18px;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }

    .faq-item.open .faq-question i {
        transform: rotate(180deg);
    }

    .faq-answer {
        display: none;
        padding: 0 1.4rem 1.2rem;
        font-size: 13px;
        color: #555;
        line-height: 1.7;
        border-top: 1px solid #f0f0f0;
        padding-top: 1rem;
    }

    .faq-item.open .faq-answer {
        display: block;
    }

    /* CTA section */
    .rto-cta {
        background: var(--yellow);
        padding: 4rem 0;
        text-align: center;
    }

    .rto-cta h2 {
        color: var(--dark);
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .rto-cta p {
        color: rgba(52, 76, 54, 0.8);
        font-size: 15px;
        max-width: 560px;
        margin: 0 auto 2rem;
    }

    .btn-dark-cta {
        background: var(--dark);
        color: var(--yellow) !important;
        padding: 15px 2rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 15px;
        display: inline-block;
        border: 2px solid var(--dark);
        transition: all 0.35s ease !important;
    }

    .btn-dark-cta:hover {
        background: transparent;
        color: var(--dark) !important;
        box-shadow: 0 0 20px rgba(52, 76, 54, 0.2);
    }

    .btn-outline-dark-cta {
        background: transparent;
        color: var(--dark) !important;
        padding: 14px 2rem;
        border-radius: 40px;
        font-weight: 600;
        font-size: 15px;
        display: inline-block;
        border: 2px solid var(--dark);
        margin-left: 12px;
        transition: all 0.35s ease !important;
    }

    .btn-outline-dark-cta:hover {
        background: var(--dark);
        color: var(--yellow) !important;
    }

    /* Testimonial highlight */
    .testi-highlight {
        background: var(--dark);
        border-radius: 16px;
        padding: 2rem;
        position: relative;
    }

    .testi-highlight::before {
        content: '"';
        font-size: 8rem;
        color: var(--yellow);
        opacity: 0.15;
        position: absolute;
        top: -10px;
        right: 20px;
        line-height: 1;
        font-family: Georgia, serif;
    }

    .testi-highlight p {
        color: rgba(255, 255, 255, 0.85);
        font-size: 14px;
        font-style: italic;
        line-height: 1.7;
        margin-bottom: 1rem;
    }

    .testi-highlight .testi-author {
        color: var(--yellow);
        font-weight: 700;
        font-size: 13px;
    }

    .testi-highlight .testi-role {
        color: rgba(255, 255, 255, 0.5);
        font-size: 12px;
    }



    /* Responsive adjustments */
    @media (max-width: 767px) {
        .stat-divider {
            display: none;
        }

        .stat-item {
            margin-bottom: 1rem;
        }

        .btn-outline-dark-cta {
            margin-left: 0;
            margin-top: 12px;
        }

        .rto-cta .cta-btns {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .btn-outline-dark-cta {
            margin-left: 0;
        }
    }
    </style>
</head>

<body>

    <!-- ===== HERO SECTION ===== -->
    <section class="head">
        <div class="container">
            <?php include_once('include/header.php') ?>
            <div class="row align-items-center mt-4">
                <div class="col-md-7">
                    <div class="bannertxt">
                        <div class="rto-badge" id="rtoHead">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            VET Industry Specialist · Melbourne
                        </div>
                        <h1 id="rtoHead">
                            RTO Website Design <span>Built for ASQA Compliance</span>
                        </h1>
                        <p>
                            I'm a Melbourne based web developer with 3+ years inside the VET industry. I understand ASQA
                            obligations, student enrolment journeys, and exactly what a Registered Training Organisation
                            needs online — not just what looks good.
                        </p>
                        <div class="d-flex flex-wrap" style="gap: 12px; margin-top: 2rem;">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone=+61499167608&text=Hi,%20I%20need%20an%20RTO%20website%20for%20my%20college"
                                class="custmbtn">
                                Get a Free RTO Audit &nbsp;<i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a href="#rto-services" class="custmbtn"
                                style="background: transparent; color: var(--dark); border-color: var(--dark);">
                                View Services &nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="bannerimg" data-aos="fade-left" id="rtoHead">
                        <!-- Use existing banner gif as fallback, replace with RTO-specific image -->
                        <img src="img/rto.gif" class="img-fluid" alt="RTO Website Design Melbourne">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== STATS BAR ===== -->
    <div class="stats-bar">
        <div class="container">
            <div class="d-flex align-items-center justify-content-around flex-wrap">
                <div class="stat-item">
                    <h3>3+</h3>
                    <p>Years in VET Industry</p>
                </div>
                <div class="stat-divider d-none d-md-block"></div>

                <div class="stat-item">
                    <h3>100%</h3>
                    <p>ASQA Compliant Builds</p>
                </div>
                <div class="stat-divider d-none d-md-block"></div>

                <div class="stat-item">
                    <h3>4+</h3>
                    <p>RTO & College Websites</p>
                </div>
                <div class="stat-divider d-none d-md-block"></div>
                <div class="stat-item">
                    <h3>VIC</h3>
                    <p>Melbourne Specialist</p>
                </div>
            </div>
        </div>
    </div>



    <!-- ===== WHY RTO SECTION ===== -->
    <section class="rto-why" id="why-rto">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6" data-aos="fade-right">
                    <p class="label-tag">- The Problem</p>
                    <h2 class="subHeading">Most RTO Websites <span>Fail on Compliance & Conversions</span></h2>
                    <p style="margin-top: 1.5rem;">
                        Generic web designers don't understand ASQA's required information standards, student
                        decision-making journeys, or VET industry regulations. The result? Websites that look
                        outdated, miss legal obligations, and lose enrolments to competitors.
                    </p>

                    <div class="pain-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="pain-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                        <h5>Missing ASQA-required information</h5>
                        <p>Fees, refund policies, complaints procedures, and USI information must be clearly visible —
                            most RTO sites fall short and risk audit issues.</p>
                    </div>

                    <div class="pain-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="pain-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <h5>Poor mobile experience losing students</h5>
                        <p>Over 70% of prospective VET students browse on mobile. Non-responsive RTO websites lose
                            enquiries before a form is ever filled.</p>
                    </div>

                    <div class="pain-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="pain-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                        <h5>Invisible on Google</h5>
                        <p>Without VET-specific SEO — targeting keywords like "Certificate III Melbourne" or "aged care
                            course RTO" — RTOs get zero organic enrolment enquiries.</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-left">
                    <div class="compliance-card">
                        <h4><i class="fa fa-shield" aria-hidden="true"></i> &nbsp;ASQA Website Compliance Checklist</h4>
                        <p style="color: rgba(255,255,255,0.6); font-size: 12px; margin-bottom: 1.2rem;">
                            Every website I build for RTOs includes these ASQA-required elements:
                        </p>
                        <ul class="check-list">
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>Scope of registration clearly displayed (courses & qualifications)</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>RTO code and registration details prominently shown</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>All fees, charges and payment terms disclosed</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>Refund and cancellation policy page</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>Complaints and appeals procedure accessible</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>USI (Unique Student Identifier) information</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>Consumer protection and student rights information</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>Pre-enrolment information and LLN disclosure</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>Privacy policy compliant with Australian Privacy Act</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o ci" aria-hidden="true"></i>
                                <span>CRICOS code display (if applicable — international students)</span>
                            </li>
                        </ul>
                        <div
                            style="margin-top: 1.5rem; padding: 1rem; background: rgba(250,173,27,0.1); border-radius: 10px; border: 1px solid rgba(250,173,27,0.25);">
                            <p style="color: var(--yellow); font-size: 12px; font-weight: 600; margin: 0;">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;
                                I know this checklist because I've worked inside the VET industry — not because I
                                googled it.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== SERVICES SECTION ===== -->
    <section class="rto-services" id="rto-services">
        <div class="container">
            <div class="text-center mb-5">
                <p class="label-tag">- What I Build</p>
                <h2 class="subHeading">RTO Web Services <span>Tailored for VET</span></h2>
            </div>
            <div class="row justify-content-center align-items-center">

                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="0">
                    <div class="rto-service-card">
                        <div class="service-icon-wrap"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                        <h5>ASQA-Compliant RTO Websites</h5>
                        <p>Full website build with all ASQA-required pages, course catalogue, enrolment forms, and
                            student information structured to meet regulatory standards.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="rto-service-card">
                        <div class="service-icon-wrap"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <h5>CRICOS College Websites</h5>
                        <p>Websites for internationally registered colleges — ESOS-compliant, multilingual-ready, and
                            designed to attract and convert international student enquiries.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="rto-service-card">
                        <div class="service-icon-wrap"><i class="fa fa-search" aria-hidden="true"></i></div>
                        <h5>VET SEO & Google Rankings</h5>
                        <p>Keyword research and on-page SEO targeting VET-specific terms: "Certificate IV Melbourne",
                            "RTO aged care course", "funded training Victoria".</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="0">
                    <div class="rto-service-card">
                        <div class="service-icon-wrap"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                        <h5>Course Landing Pages</h5>
                        <p>Individual landing pages for each qualification — optimised for Google Ads and organic
                            search, with clear enrolment CTAs and ASQA-required information.</p>
                    </div>
                </div>

                <!-- <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="rto-service-card">
                        <div class="service-icon-wrap"><i class="fa fa-wpforms" aria-hidden="true"></i></div>
                        <h5>Online Enrolment Systems</h5>
                        <p>Custom digital enrolment forms with USI collection, document uploads, e-signature, and
                            backend management — reducing admin workload significantly.</p>
                    </div>
                </div> -->

                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="rto-service-card">
                        <div class="service-icon-wrap"><i class="fa fa-refresh" aria-hidden="true"></i></div>
                        <h5>Website Redesign & Migration</h5>
                        <p>Migrate from outdated Wix, Weebly, or old WordPress sites to a fast, modern, mobile-first
                            website without losing your existing Google rankings.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== PROCESS SECTION ===== -->
    <section class="rto-process">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5" data-aos="fade-right">
                    <p class="label-tag">- My Process</p>
                    <h2 class="subHeading" style="color: #fff;">How I Build Your <span>RTO Website</span></h2>
                    <p style="color: rgba(255,255,255,0.65); margin-top: 1rem; margin-bottom: 2.5rem;">
                        A clear, collaborative process with zero tech jargon. You get a compliant, high-performing
                        website — on time and on budget.
                    </p>

                    <!-- <div class="testi-highlight" style="margin-top: 2rem;">
                        <p>"Jatinder understood our RTO from day one. He knew exactly what pages we needed for ASQA and
                            built a site that increased our student enquiries significantly."</p>
                        <div class="testi-author">VET College, Melbourne</div>
                        <div class="testi-role">Certificate III & IV Provider</div>
                    </div> -->
                </div>

                <div class="col-md-7" data-aos="fade-left">
                    <div class="step-connector" style="display:none"></div>

                    <div class="process-step">
                        <div class="step-num">1</div>
                        <div class="step-content">
                            <h5>Free RTO Website Audit</h5>
                            <p>I review your current site against ASQA requirements, mobile performance, and enrolment
                                conversion — and share a clear written report at no cost.</p>
                        </div>
                    </div>
                    <div class="step-connector"></div>

                    <div class="process-step">
                        <div class="step-num">2</div>
                        <div class="step-content">
                            <h5>Strategy & Scope Call</h5>
                            <p>We discuss your student target, courses, compliance obligations, and budget. I recommend
                                the right approach and provide a fixed-price proposal within 48 hours.</p>
                        </div>
                    </div>
                    <div class="step-connector"></div>

                    <div class="process-step">
                        <div class="step-num">3</div>
                        <div class="step-content">
                            <h5>Design & Build</h5>
                            <p>Mobile-first design in your brand colours, built with all ASQA-required pages. You review
                                a staging version before anything goes live.</p>
                        </div>
                    </div>
                    <div class="step-connector"></div>

                    <div class="process-step">
                        <div class="step-num">4</div>
                        <div class="step-content">
                            <h5>Launch & Ongoing Support</h5>
                            <p>Go live with confidence. Optional monthly maintenance retainer covers course updates,
                                compliance changes, and ASQA re-registration cycles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PRICING SECTION ===== -->
    <section class="rto-pricing" id="rto-pricing" style="display: none;">
        <div class="container">
            <div class="text-center mb-5">
                <p class="label-tag">- Transparent Pricing</p>
                <h2 class="subHeading">RTO Website <span>Packages</span></h2>
                <p style="max-width: 500px; margin: 0.8rem auto 0;">No hidden fees. Fixed pricing with everything an RTO
                    needs to be compliant and competitive online.</p>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="price-card">
                        <div class="plan-name">Starter RTO</div>
                        <div class="price-val">$2,500</div>
                        <div class="price-period">One-time · perfect for small RTOs</div>
                        <ul class="price-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Up to 8 pages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> ASQA-compliant page structure</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Mobile responsive design</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Enrolment enquiry form</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Google My Business setup</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Basic on-page SEO</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> 30-day post-launch support</li>
                        </ul>
                        <a href="contact-us.php" class="custmbtn"
                            style="width: 100%; text-align: center; display: block;">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="price-card featured">
                        <div class="featured-badge">Most Popular</div>
                        <div class="plan-name">Growth RTO</div>
                        <div class="price-val" style="color: var(--yellow);">$4,500</div>
                        <div class="price-period">One-time · best for growing colleges</div>
                        <ul class="price-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Up to 20 pages + course pages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Full ASQA compliance audit</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Custom enrolment forms</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> VET keyword SEO strategy</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Google Ads landing pages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Speed & Core Web Vitals optimised</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> 60-day post-launch support</li>
                        </ul>
                        <a href="contact-us.php" class="custmbtn"
                            style="width: 100%; text-align: center; display: block;">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="price-card">
                        <div class="plan-name">CRICOS Premium</div>
                        <div class="price-val">$8,000+</div>
                        <div class="price-period">One-time · international student colleges</div>
                        <ul class="price-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> ESOS & CRICOS compliant build</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Multilingual capability</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Online enrolment system</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> International student SEO</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Student portal integration</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Custom CMS admin panel</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Ongoing monthly retainer option</li>
                        </ul>
                        <a href="contact-us.php" class="custmbtn"
                            style="width: 100%; text-align: center; display: block;">Discuss Project</a>
                    </div>
                </div>

            </div>

            <div class="text-center mt-4">
                <p style="font-size: 13px; color: #777;">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;
                    All packages can include a monthly maintenance retainer ($300–$500/mo) for ongoing course updates
                    and compliance changes.
                    <a href="contact-us.php" style="color: var(--dark); font-weight: 600;">Ask me about retainers →</a>
                </p>
            </div>
        </div>
    </section>

    <!-- ===== PORTFOLIO ===== -->
    <section class="projects" id="portfolio">
        <div class="container">
            <p class="label-tag">- Portfolio</p>
            <h2 class="subHeading">RTO & VET <span>College Projects</span></h2>
            <br>
            <div class="row" id="project-grid"></div>
        </div>
    </section>

    <!-- ===== FAQ SECTION ===== -->
    <section class="rto-faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center mb-5">
                        <p class="label-tag">- FAQ</p>
                        <h2 class="subHeading">Common Questions from <span>RTOs</span></h2>
                    </div>

                    <div class="faq-item" data-aos="fade-up">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            What ASQA information must be on my RTO website?
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="faq-answer">
                            ASQA requires RTOs to display their RTO code, scope of registration, all fees and charges,
                            refund and cancellation policies, complaints and appeals procedures, USI information, and
                            consumer protection information. I build all of these into every RTO website as standard —
                            not as add-ons.
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            Can you redesign my existing RTO website without losing SEO rankings?
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="faq-answer">
                            Yes. I implement proper 301 redirects, preserve existing URL structures where possible,
                            migrate all meta data, and submit updated sitemaps to Google. Most clients see equal or
                            improved rankings within 60 days of relaunch.
                        </div>
                    </div>



                    <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            How long does an RTO website take to build?
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="faq-answer">
                            A Starter RTO website is typically delivered in 2–3 weeks and
                            and SEO setup take 4–6 weeks. I provide a clear timeline in every proposal.
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            Can you help with ongoing website updates for ASQA re-registration?
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="faq-answer">
                            Absolutely. RTOs update their scope of registration, add new qualifications, and need to
                            reflect policy changes regularly.
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            Do you work with CRICOS-registered colleges?
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="faq-answer">
                            Yes. CRICOS colleges have additional ESOS Act obligations around how information is
                            presented to international students. I understand these requirements and build websites that
                            meet both ASQA and ESOS standards, including agent portal pages and country-specific content
                            where needed.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section class="rto-cta">
        <div class="container">
            <div data-aos="zoom-in">
                <h2>Ready to Get an ASQA-Compliant <br>Website That Wins More Students?</h2>
                <p>Start with a free 20-minute RTO website review. I'll identify your compliance gaps and top 3 quick
                    wins — no obligation.</p>
                <div class="cta-btns">
                    <a target="_blank"
                        href="https://api.whatsapp.com/send?phone=+61499167608&text=Hi,%20I%20need%20a%20free%20RTO%20website%20audit"
                        class="btn-dark-cta">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i> &nbsp; Book Free Audit on WhatsApp
                    </a>
                    <a href="contact-us.php" class="btn-outline-dark-cta">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; Send an Enquiry
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contacttxt" data-aos="fade-right">
                        <h5 class="m-0">-Contact us</h5>
                        <h2 class="subHeading">Let's Build Your <span>RTO Website</span></h2>
                        <br>
                        <p>Have a project or just want to find out if your current website is ASQA-compliant? Drop a
                            message and I'll get back to you within 24 hours.</p>
                        <ul class="contactul mt-4">
                            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <a href="tel:+61499167608">+61 499 167 608</a>
                            </li>
                            <li><span><i class="fa fa-envelope"></i></span>
                                <a href="mailto:contact@jatinderdev.com.au"
                                    class="text-lowercase">contact@jatinderdev.com.au</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contactform" data-aos="fade-left">
                        <form action="email.php" method="post" id="query-form">
                            <label for="name">name</label>
                            <input type="text" name="name" placeholder="Doe John" id="name" class="txtbox">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email">email*</label>
                                    <input required type="email" name="email" id="email" placeholder="youremail@abc.com"
                                        class="txtbox">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">contact</label>
                                    <input type="text" name="phone" id="phone" placeholder="+61 123 321 123"
                                        class="txtbox">
                                </div>
                            </div>
                            <label for="college">College / RTO name</label>
                            <input type="text" name="college" id="college" placeholder="e.g. Melbourne Skills Academy"
                                class="txtbox">
                            <label for="message">write your message*</label>
                            <textarea required name="message" placeholder="Tell me about your RTO website needs..."
                                id="message" cols="20" class="txtbox" rows="3"></textarea>
                            <button class="g-recaptcha btn custmbtn"
                                data-sitekey="6LeCUlorAAAAAN-YsaaKqxfFnfWa30DOSn9kCUi1" data-callback='onSubmit'
                                data-action='submit' type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer.php') ?>

    <script>
    // Load RTO portfolio projects
    loadProject('RTO College');

    // FAQ toggle
    function toggleFaq(el) {
        const item = el.parentElement;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(f => f.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }
    </script>

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 700,
        once: true,
        offset: 60
    });
    </script>

</body>

</html>
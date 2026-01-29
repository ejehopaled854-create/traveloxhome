<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TraveloxHome Makeup Artist - Professional Beauty Services</title>
    <meta name="description" content="TraveloxHome offers professional makeup artistry services for weddings, events, and special occasions. Expert beauty treatments with personalized care and attention to detail.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: #f8f9fa;
        }

        .header_container_9x4k {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav_wrapper_7m2p {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo_text_5k8n {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center;
        }

        .navigation_menu_3j9r {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            list-style: none;
        }

        .navigation_menu_3j9r a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .navigation_menu_3j9r a:hover {
            background: rgba(255,255,255,0.2);
        }

        .hero_section_8d5t {
            background: linear-gradient(rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8)), url('https://images.pexels.com/photos/3373736/pexels-photo-3373736.jpeg?auto=compress&cs=tinysrgb&w=1200') center/cover;
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .hero_content_2w7q {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero_title_6n3m {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero_subtitle_4p8k {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .cta_button_9x2l {
            display: inline-block;
            background: #ff6b6b;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.1rem;
            transition: transform 0.3s, background 0.3s;
            margin: 10px;
        }

        .cta_button_9x2l:hover {
            transform: translateY(-3px);
            background: #ee5a52;
        }

        .content_wrapper_5h7j {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section_block_8k4m {
            background: white;
            margin: 30px 0;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .section_title_3n9p {
            font-size: 2.2rem;
            color: #667eea;
            margin-bottom: 20px;
            border-bottom: 3px solid #764ba2;
            padding-bottom: 10px;
        }

        .text_content_7m5k {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }

        .services_grid_4j8n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .service_card_6p2m {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
            transition: transform 0.3s;
        }

        .service_card_6p2m:hover {
            transform: translateX(10px);
        }

        .service_title_9k3l {
            font-size: 1.5rem;
            color: #764ba2;
            margin-bottom: 10px;
        }

        .image_embed_5n7k {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin: 20px 0;
        }

        .timeline_container_8m4p {
            position: relative;
            padding: 20px 0;
        }

        .timeline_item_3k9n {
            padding: 20px;
            margin: 20px 0;
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            border-radius: 5px;
        }

        .timeline_year_7j2m {
            font-size: 1.8rem;
            color: #764ba2;
            font-weight: bold;
        }

        .review_container_4n8k {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 30px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .review_card_6m3p {
            background: white;
            padding: 25px;
            margin: 15px 0;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .reviewer_name_9k5l {
            font-weight: bold;
            color: #667eea;
            font-size: 1.2rem;
        }

        .review_stars_2n7m {
            color: #ffd700;
            font-size: 1.3rem;
            margin: 5px 0;
        }

        .footer_section_8j4n {
            background: #2c3e50;
            color: white;
            padding: 40px 20px;
            margin-top: 50px;
        }

        .footer_content_5k9m {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .footer_column_3n7p {
            padding: 20px;
        }

        .footer_title_6m2k {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #667eea;
        }

        .contact_link_9k4m {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            transition: color 0.3s;
        }

        .contact_link_9k4m:hover {
            color: #667eea;
        }

        .modal_overlay_7n3k {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 1000;
            overflow-y: auto;
        }

        .modal_content_4m8p {
            background: white;
            max-width: 800px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 10px;
            position: relative;
        }

        .modal_close_6k2n {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 2rem;
            cursor: pointer;
            color: #764ba2;
        }

        .feature_box_8n5m {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
        }

        .stats_container_3j7k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .stat_box_9m4n {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            border-top: 4px solid #667eea;
        }

        .stat_number_5k8p {
            font-size: 2.5rem;
            color: #764ba2;
            font-weight: bold;
        }

        .stat_label_7n2m {
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .hero_title_6n3m {
                font-size: 2rem;
            }
            
            .section_block_8k4m {
                padding: 20px;
            }
        }
    </style>

    <style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%39%30%31%65%33%33%30%33%65%63%68%6F%31%30%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%39%30%31%65%33%33%30%33%65%63%68%6F%31%30%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%39%30%31%65%33%33%30%33%65%63%68%6F%31%30%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

    <header class="header_container_9x4k">
        <div class="nav_wrapper_7m2p">
            <div class="logo_text_5k8n">TraveloxHome</div>
            <nav>
                <ul class="navigation_menu_3j9r">
                    <li><a href="#home_9k3m">Home</a></li>
                    <li><a href="#about_7n4p">About Us</a></li>
                    <li><a href="#services_5m8k">Services</a></li>
                    <li><a href="#history_3j9n">Our Journey</a></li>
                    <li><a href="#expertise_8k2m">Expertise</a></li>
                    <li><a href="#testimonials_6n7p">Reviews</a></li>
                    <li><a href="#process_4m9k">Our Process</a></li>
                    <li><a href="#team_2n8j">Team</a></li>
                    <li><a href="#contact_9k5m">Contact</a></li>
                    <li><a href="#" onclick="openModal('privacy'); return false;">Privacy</a></li>
                    <li><a href="#" onclick="openModal('terms'); return false;">Terms</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero_section_8d5t" id="home_9k3m">
        <div class="hero_content_2w7q">
            <h1 class="hero_title_6n3m">Professional Makeup Artistry Services</h1>
            <p class="hero_subtitle_4p8k">Transform your look with expert beauty treatments tailored to your unique style and personality</p>
            <a href="#contact_9k5m" class="cta_button_9x2l">Book Your Session</a>
            <a href="#services_5m8k" class="cta_button_9x2l">Explore Services</a>
        </div>
    </section>

    <div class="content_wrapper_5h7j">
        <section class="section_block_8k4m" id="about_7n4p">
            <h2 class="section_title_3n9p">Welcome to TraveloxHome Makeup Artistry</h2>
            <p class="text_content_7m5k">At TraveloxHome, we believe that every individual deserves to feel confident and beautiful in their own skin. Our dedicated team of professional makeup artists brings years of experience and passion to every appointment, ensuring that you receive personalized attention and exceptional results. Whether you're preparing for a wedding, special event, photoshoot, or simply want to enhance your everyday look, we're here to make your beauty dreams come true. <a href="#services_5m8k" style="color: #667eea; font-weight: bold;">Click here to continue</a> exploring our comprehensive range of services designed to meet your unique needs.</p>
            <img src="https://images.pexels.com/photos/3065209/pexels-photo-3065209.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Makeup artistry" class="image_embed_5n7k">
            <p class="text_content_7m5k">Our philosophy centers around enhancing natural beauty while respecting individual preferences and styles. We understand that makeup is not just about application techniques, but about understanding facial structures, skin tones, and personal aesthetics. Each client receives a customized consultation where we discuss your vision, preferences, and any specific requirements you might have. Our artists stay updated with the latest trends and techniques through continuous education and training, ensuring that you receive contemporary and timeless looks that photograph beautifully and last throughout your event.</p>
        </section>

        <section class="section_block_8k4m" id="services_5m8k">
            <h2 class="section_title_3n9p">Our Comprehensive Services</h2>
            <p class="text_content_7m5k">TraveloxHome offers an extensive range of makeup artistry services designed to cater to various occasions and preferences. Our skilled professionals work with high-quality products and tools to ensure flawless application and long-lasting results.</p>
            <div class="services_grid_4j8n">
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Bridal Makeup</h3>
                    <p class="text_content_7m5k">Your wedding day deserves perfection. Our bridal makeup services include trial sessions, day-of application, and touch-up assistance. We create looks that complement your dress, theme, and personal style while ensuring you look stunning in photographs and in person.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Event Makeup</h3>
                    <p class="text_content_7m5k">From corporate gatherings to birthday celebrations, our event makeup services ensure you look your absolute best. We consider lighting conditions, photography requirements, and event duration to create appropriate and lasting looks.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Editorial & Photoshoot</h3>
                    <p class="text_content_7m5k">Professional photography requires specialized makeup techniques. Our artists understand camera requirements, lighting effects, and how to create looks that translate beautifully in photographs while maintaining natural appeal.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Special Occasions</h3>
                    <p class="text_content_7m5k">Whether attending a gala, prom, or anniversary celebration, our special occasion makeup enhances your features and boosts your confidence. We create sophisticated looks that last throughout your event.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Makeup Lessons</h3>
                    <p class="text_content_7m5k">Learn professional techniques through our personalized makeup lessons. We teach application methods, product selection, and tips for achieving salon-quality results at home. Perfect for those wanting to improve their skills.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Group Sessions</h3>
                    <p class="text_content_7m5k">Perfect for bridal parties, corporate events, or celebrations with friends. Our group sessions provide professional makeup services for multiple people, ensuring everyone looks coordinated and fabulous.</p>
                </div>
            </div>
            <img src="https://images.pexels.com/photos/3373745/pexels-photo-3373745.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Professional makeup services" class="image_embed_5n7k">
        </section>

        <section class="section_block_8k4m" id="history_3j9n">
            <h2 class="section_title_3n9p">Our Journey Through the Years</h2>
            <p class="text_content_7m5k">TraveloxHome has evolved from a passionate vision into a respected name in the makeup artistry industry. Our journey reflects dedication, continuous learning, and an unwavering commitment to client satisfaction.</p>
            <div class="timeline_container_8m4p">
                <div class="timeline_item_3k9n">
                    <div class="timeline_year_7j2m">2015</div>
                    <p class="text_content_7m5k">TraveloxHome was founded by a group of passionate makeup artists who shared a common vision: to provide accessible, professional beauty services that celebrate individual uniqueness. Starting with a small studio space and three dedicated artists, we focused on building relationships with clients and understanding their needs. Our commitment to quality and personalized service quickly earned us a loyal following in the local community.</p>
                </div>
                <div class="timeline_item_3k9n">
                    <div class="timeline_year_7j2m">2017</div>
                    <p class="text_content_7m5k">As demand for our services grew, we expanded our team to include specialists in various makeup techniques including airbrush application, special effects, and theatrical makeup. This diversification allowed us to serve a broader range of clients and occasions. We also introduced our mobile makeup services, bringing professional artistry directly to clients' locations for added convenience.</p>
                </div>
                <div class="timeline_item_3k9n">
                    <div class="timeline_year_7j2m">2019</div>
                    <p class="text_content_7m5k">Recognition came in the form of multiple industry awards and features in regional beauty publications. We launched our educational program, offering workshops and one-on-one lessons to aspiring makeup artists and beauty enthusiasts. Our commitment to using cruelty-free and environmentally conscious products became a cornerstone of our brand identity, resonating with socially conscious clients.</p>
                </div>
                <div class="timeline_item_3k9n">
                    <div class="timeline_year_7j2m">2021</div>
                    <p class="text_content_7m5k">The challenging times brought innovation. We adapted our services to meet new safety standards while maintaining our quality commitment. Virtual consultations became part of our offering, allowing clients to receive expert advice remotely. We also expanded our product line recommendations, helping clients achieve professional results at home when needed.</p>
                </div>
                <div class="timeline_item_3k9n">
                    <div class="timeline_year_7j2m">2023</div>
                    <p class="text_content_7m5k">Today, TraveloxHome stands as a testament to perseverance and passion. Our team has grown to include fifteen skilled artists, each bringing unique expertise and creativity. We've served thousands of satisfied clients, participated in numerous high-profile events, and continue to push boundaries in makeup artistry while staying true to our founding principles of accessibility, quality, and personalized care.</p>
                </div>
            </div>
            <img src="https://images.pexels.com/photos/3373748/pexels-photo-3373748.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Makeup artist at work" class="image_embed_5n7k">
        </section>

        <section class="section_block_8k4m" id="expertise_8k2m">
            <h2 class="section_title_3n9p">Our Areas of Expertise</h2>
            <p class="text_content_7m5k">At TraveloxHome, our expertise spans multiple facets of makeup artistry, ensuring comprehensive solutions for every beauty need. Our artists undergo rigorous training and continuous education to maintain the highest standards of service delivery.</p>
            <div class="feature_box_8n5m">
                <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Specialized Techniques</h3>
                <p style="font-size: 1.1rem;">Our team masters various application methods including traditional brush techniques, airbrush makeup, contouring and highlighting, color correction, and long-wear formulations. We understand how different techniques work with various skin types and conditions.</p>
            </div>
            <p class="text_content_7m5k">Skin analysis forms the foundation of our approach. Before any application, we carefully assess skin type, undertones, texture, and any specific concerns. This analysis guides our product selection and application strategy, ensuring optimal results that enhance rather than mask natural beauty. We work with all skin types from oily to dry, sensitive to combination, and everything in between.</p>
            <img src="https://images.pexels.com/photos/3065171/pexels-photo-3065171.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Makeup application techniques" class="image_embed_5n7k">
            <p class="text_content_7m5k">Color theory expertise allows us to create harmonious looks that complement your natural coloring, outfit choices, and event themes. We understand how colors interact, which shades enhance specific eye colors, and how to create depth and dimension through strategic color placement. Our artists can create everything from natural, barely-there looks to bold, dramatic statements depending on your preferences and the occasion. <a href="#testimonials_6n7p" style="color: #667eea; font-weight: bold;">Click here to continue</a> reading what our clients say about their experiences.</p>
            <div class="stats_container_3j7k">
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">2500+</div>
                    <div class="stat_label_7n2m">Happy Clients</div>
                </div>
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">15</div>
                    <div class="stat_label_7n2m">Expert Artists</div>
                </div>
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">8</div>
                    <div class="stat_label_7n2m">Years Experience</div>
                </div>
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">500+</div>
                    <div class="stat_label_7n2m">Weddings Served</div>
                </div>
            </div>
        </section>

        <section class="section_block_8k4m" id="testimonials_6n7p">
            <h2 class="section_title_3n9p">Client Testimonials</h2>
            <p class="text_content_7m5k">Our clients' satisfaction drives everything we do. Here's what some of them have shared about their experiences with TraveloxHome makeup artistry services.</p>
            <div class="review_container_4n8k">
                <div class="review_card_6m3p">
                    <div class="reviewer_name_9k5l">Sarah Mitchell</div>
                    <div class="review_stars_2n7m">★★★★★</div>
                    <p class="text_content_7m5k">I cannot express how grateful I am for the incredible work done on my wedding day. The artist listened carefully to my vision and created a look that exceeded my expectations. My makeup lasted through tears, dancing, and twelve hours of celebration. Every photograph turned out beautifully, and I felt absolutely radiant. The trial session beforehand gave me complete confidence, and the day-of service was seamless and stress-free.</p>
                </div>
                <div class="review_card_6m3p">
                    <div class="reviewer_name_9k5l">Jennifer Rodriguez</div>
                    <div class="review_stars_2n7m">★★★★★</div>
                    <p class="text_content_7m5k">As someone with sensitive skin, I've always been hesitant about professional makeup services. TraveloxHome completely changed my perspective. They took time to understand my skin concerns, used appropriate products, and created a stunning look without any irritation. The artist was knowledgeable, patient, and genuinely cared about my comfort. I've since returned for multiple events and even took a makeup lesson to learn their techniques.</p>
                </div>
                <div class="review_card_6m3p">
                    <div class="reviewer_name_9k5l">Amanda Chen</div>
                    <div class="review_stars_2n7m">★★★★★</div>
                    <p class="text_content_7m5k">The group session for my bridal party was fantastic. The team managed to create unique looks for each person while maintaining a cohesive aesthetic. Everyone felt beautiful and confident. The artists were punctual, professional, and created a fun, relaxed atmosphere. They worked efficiently without rushing, and every detail was perfect. Several of my bridesmaids have since become regular clients.</p>
                </div>
                <div class="review_card_6m3p">
                    <div class="reviewer_name_9k5l">Lisa Thompson</div>
                    <div class="review_stars_2n7m">★★★★★</div>
                    <p class="text_content_7m5k">I hired TraveloxHome for a professional photoshoot, and the results were outstanding. The makeup photographed beautifully under studio lights, and the artist understood exactly what was needed for camera work. They collaborated well with the photographer and were flexible when we needed adjustments. The attention to detail and professional expertise really showed in the final images.</p>
                </div>
                <div class="review_card_6m3p">
                    <div class="reviewer_name_9k5l">Rebecca Martinez</div>
                    <div class="review_stars_2n7m">★★★★★</div>
                    <p class="text_content_7m5k">The makeup lesson I took was incredibly valuable. I learned techniques I never would have figured out on my own, got personalized product recommendations for my skin type and coloring, and gained confidence in my application skills. The instructor was patient, encouraging, and made complex techniques easy to understand. Money well spent, and I continue to use what I learned every day.</p>
                </div>
                <div class="review_card_6m3p">
                    <div class="reviewer_name_9k5l">Michelle Davis</div>
                    <div class="review_stars_2n7m">★★★★★</div>
                    <p class="text_content_7m5k">For my milestone birthday celebration, I wanted to look special without appearing overdone. The artist struck the perfect balance, enhancing my features while keeping the look age-appropriate and elegant. I received so many compliments throughout the evening. The consultation process was thorough, and I appreciated how they considered my personal style and the event venue when planning the look.</p>
                </div>
            </div>
            <img src="https://images.pexels.com/photos/3373750/pexels-photo-3373750.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Happy makeup client" class="image_embed_5n7k">
        </section>

        <section class="section_block_8k4m" id="process_4m9k">
            <h2 class="section_title_3n9p">Our Service Process</h2>
            <p class="text_content_7m5k">Understanding what to expect makes the experience more enjoyable. Here's how we work with clients from initial contact through final application and beyond.</p>
            <div class="services_grid_4j8n">
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Step 1: Consultation</h3>
                    <p class="text_content_7m5k">Every relationship begins with conversation. During your consultation, we discuss your vision, preferences, event details, and any specific requirements. We review inspiration photos, discuss your typical makeup routine, and identify what you love and what you'd like to avoid. This conversation can happen in person, via phone, or through video call depending on your preference.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Step 2: Skin Assessment</h3>
                    <p class="text_content_7m5k">We carefully analyze your skin type, tone, undertones, texture, and any specific concerns. This assessment guides our product selection and application approach. We discuss any sensitivities or allergies to ensure we use appropriate products. For bridal clients, we often recommend skincare routines leading up to the event for optimal results.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Step 3: Trial Session</h3>
                    <p class="text_content_7m5k">For weddings and major events, we strongly recommend trial sessions. This allows us to test different looks, make adjustments, and ensure you're completely satisfied before the big day. Trials typically occur 4-6 weeks before the event, giving time for any skincare adjustments if needed. You'll leave with photos and notes about the final look.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Step 4: Preparation</h3>
                    <p class="text_content_7m5k">We provide detailed preparation instructions before your appointment. This includes skincare recommendations, what to wear during application, and timing considerations. For mobile services, we confirm location details and setup requirements. We arrive with all necessary products, tools, and equipment, so you don't need to provide anything.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Step 5: Application</h3>
                    <p class="text_content_7m5k">The application process is relaxing and enjoyable. We work methodically, explaining what we're doing if you're interested in learning. We check in regularly to ensure you're comfortable and happy with the progression. The process typically takes 60-90 minutes depending on the complexity of the look. We use professional products and techniques for long-lasting results.</p>
                </div>
                <div class="service_card_6p2m">
                    <h3 class="service_title_9k3l">Step 6: Final Touches</h3>
                    <p class="text_content_7m5k">Before we finish, we review the completed look together, make any final adjustments, and provide touch-up tips for throughout your event. We can provide a small touch-up kit with essential products if requested. For weddings, we often stay for final preparations to ensure everything remains perfect through photographs and ceremony preparations. <a href="#contact_9k5m" style="color: #667eea; font-weight: bold;">Click here to continue</a> to our contact section to book your appointment.</p>
                </div>
            </div>
            <img src="https://images.pexels.com/photos/3065200/pexels-photo-3065200.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Makeup application process" class="image_embed_5n7k">
        </section>

        <section class="section_block_8k4m" id="team_2n8j">
            <h2 class="section_title_3n9p">Meet Our Talented Team</h2>
            <p class="text_content_7m5k">TraveloxHome's success stems from our incredible team of passionate, skilled makeup artists. Each member brings unique expertise, creativity, and dedication to client satisfaction. Our artists come from diverse backgrounds and training, creating a rich tapestry of skills and perspectives that benefit our clients.</p>
            <p class="text_content_7m5k">Our team members hold certifications from respected beauty institutions and participate in ongoing education to stay current with evolving techniques and trends. Many have worked in various sectors of the beauty industry including fashion, film, television, and editorial before joining TraveloxHome. This diverse experience enriches our collective knowledge and allows us to handle any makeup challenge with confidence and creativity.</p>
            <div class="feature_box_8n5m">
                <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Team Philosophy</h3>
                <p style="font-size: 1.1rem;">We believe in collaboration, continuous learning, and putting clients first. Our artists support each other, share knowledge freely, and work together to solve creative challenges. This collaborative spirit creates a positive environment that clients feel and appreciate.</p>
            </div>
            <p class="text_content_7m5k">Each artist specializes in particular areas while maintaining broad competency across all services. Some focus on bridal makeup, others excel in editorial work, and several specialize in teaching and education. This specialization ensures you're matched with the perfect artist for your specific needs. During busy seasons, our team coordination ensures seamless service delivery even when managing multiple events simultaneously.</p>
            <img src="https://images.pexels.com/photos/3373739/pexels-photo-3373739.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Professional makeup team" class="image_embed_5n7k">
            <p class="text_content_7m5k">Beyond technical skills, our team members are selected for their interpersonal abilities, professionalism, and genuine passion for helping people feel beautiful. We understand that makeup application is an intimate service requiring trust, and we take that responsibility seriously. Our artists create comfortable, welcoming environments where clients can relax and enjoy the transformation process.</p>
        </section>

        <section class="section_block_8k4m">
            <h2 class="section_title_3n9p">Product Philosophy and Selection</h2>
            <p class="text_content_7m5k">The products we use directly impact the quality and longevity of our work. TraveloxHome maintains strict standards for product selection, prioritizing quality, safety, and performance. We work with professional-grade cosmetics from reputable manufacturers known for their formulation excellence and ethical practices.</p>
            <p class="text_content_7m5k">Our product inventory includes options for all skin types, tones, and sensitivities. We stock extensive shade ranges ensuring perfect matches for every client. Our foundation selection alone includes over fifty shades across multiple formulations from sheer to full coverage, matte to dewy finishes. This variety allows us to customize not just color but also texture and finish to suit individual preferences and needs.</p>
            <div class="stats_container_3j7k">
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">200+</div>
                    <div class="stat_label_7n2m">Product Varieties</div>
                </div>
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">100%</div>
                    <div class="stat_label_7n2m">Cruelty-Free Options</div>
                </div>
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">50+</div>
                    <div class="stat_label_7n2m">Foundation Shades</div>
                </div>
                <div class="stat_box_9m4n">
                    <div class="stat_number_5k8p">30+</div>
                    <div class="stat_label_7n2m">Brand Partners</div>
                </div>
            </div>
            <p class="text_content_7m5k">Hygiene and safety are paramount in our product use. All products are stored properly, checked regularly for expiration, and applied using sanitized tools and brushes. We never double-dip applicators, and disposable options are used when appropriate. For clients with specific allergies or sensitivities, we can work with their personal products or source hypoallergenic alternatives.</p>
            <img src="https://images.pexels.com/photos/3065197/pexels-photo-3065197.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Professional makeup products" class="image_embed_5n7k">
        </section>

        <section class="section_block_8k4m">
            <h2 class="section_title_3n9p">Special Event Expertise</h2>
            <p class="text_content_7m5k">Different events require different approaches to makeup artistry. TraveloxHome has extensive experience across various event types, understanding the unique requirements and challenges each presents. Our adaptability ensures appropriate, beautiful results regardless of the occasion.</p>
            <p class="text_content_7m5k">Wedding makeup requires special consideration for longevity, photography, and emotional moments. We use long-wear formulations, setting techniques, and strategic product layering to ensure makeup withstands tears, heat, humidity, and hours of wear. We consider both natural and artificial lighting, ensuring brides look stunning in person and in photographs. Our experience with wedding timelines means we work efficiently without rushing, keeping everyone on schedule while maintaining quality.</p>
            <p class="text_content_7m5k">Corporate events demand polished, professional looks that enhance without overwhelming. We create sophisticated makeup that looks natural in office lighting and video conferences while still providing coverage and polish. These looks typically emphasize grooming, subtle enhancement, and long wear for full workdays or evening events.</p>
            <p class="text_content_7m5k">Photoshoot makeup differs significantly from everyday application. We understand how products photograph under various lighting conditions, how to create dimension that translates to two-dimensional images, and how to work with photographers to achieve their vision. Whether editorial, portrait, or commercial photography, we adapt techniques to suit the specific requirements. <a href="#contact_9k5m" style="color: #667eea; font-weight: bold;">Click here to continue</a> and schedule your consultation today.</p>
            <img src="https://images.pexels.com/photos/3065187/pexels-photo-3065187.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Event makeup services" class="image_embed_5n7k">
        </section>

        <section class="section_block_8k4m" id="contact_9k5m">
            <h2 class="section_title_3n9p">Get in Touch</h2>
            <p class="text_content_7m5k">Ready to experience TraveloxHome's exceptional makeup artistry services? We'd love to hear from you. Whether you have questions, want to book an appointment, or simply need advice, our team is here to help. We respond to all inquiries promptly and look forward to being part of your beauty journey.</p>
            <div class="feature_box_8n5m">
                <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Book Your Appointment Today</h3>
                <p style="font-size: 1.1rem; margin-bottom: 20px;">Contact us through any of the methods below. We'll discuss your needs, answer questions, and schedule your service at a convenient time. Early booking is recommended, especially for wedding and event services during peak seasons.</p>
                <a href="tel:+15559847362" class="cta_button_9x2l" style="background: white; color: #667eea;">Call Now: (555) 984-7362</a>
            </div>
            <p class="text_content_7m5k">Our booking process is straightforward and flexible. We accommodate various schedules and can arrange appointments during evenings and weekends when needed. For mobile services, we travel to your location within our service area, bringing everything needed for a complete makeup experience. Studio appointments are also available at our comfortable, well-equipped facility.</p>
            <img src="https://images.pexels.com/photos/3065531/pexels-photo-3065531.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Contact us for makeup services" class="image_embed_5n7k">
        </section>
    </div>

    <footer class="footer_section_8j4n">
        <div class="footer_content_5k9m">
            <div class="footer_column_3n7p">
                <h3 class="footer_title_6m2k">TraveloxHome</h3>
                <p style="color: #bbb;">Professional makeup artistry services for all occasions. Enhancing natural beauty with expert techniques and personalized care.</p>
            </div>
            <div class="footer_column_3n7p">
                <h3 class="footer_title_6m2k">Contact Information</h3>
                <a href="tel:+15559847362" class="contact_link_9k4m">📞 (555) 984-7362</a>
                <a href="mailto:info@traveloxhome.com" class="contact_link_9k4m">✉️ info@traveloxhome.com</a>
                <p class="contact_link_9k4m">📍 2847 Riverside Avenue, Suite 302</p>
                <p class="contact_link_9k4m">Springfield, IL 62701</p>
            </div>
            <div class="footer_column_3n7p">
                <h3 class="footer_title_6m2k">Business Hours</h3>
                <p class="contact_link_9k4m">Monday - Friday: 9:00 AM - 7:00 PM</p>
                <p class="contact_link_9k4m">Saturday: 8:00 AM - 6:00 PM</p>
                <p class="contact_link_9k4m">Sunday: 10:00 AM - 4:00 PM</p>
                <p class="contact_link_9k4m" style="margin-top: 15px; color: #bbb;">Evening appointments available by request</p>
            </div>
            <div class="footer_column_3n7p">
                <h3 class="footer_title_6m2k">Quick Links</h3>
                <a href="#home_9k3m" class="contact_link_9k4m">Home</a>
                <a href="#services_5m8k" class="contact_link_9k4m">Services</a>
                <a href="#testimonials_6n7p" class="contact_link_9k4m">Reviews</a>
                <a href="#" onclick="openModal('privacy'); return false;" class="contact_link_9k4m">Privacy Policy</a>
                <a href="#" onclick="openModal('terms'); return false;" class="contact_link_9k4m">Terms of Service</a>
            </div>
        </div>
        <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #444; color: #bbb;">
            <p>&copy; 2024 TraveloxHome Makeup Artistry. All rights reserved.</p>
        </div>
    </footer>

    <div id="modal_privacy_7k3n" class="modal_overlay_7n3k">
        <div class="modal_content_4m8p">
            <span class="modal_close_6k2n" onclick="closeModal('privacy')">&times;</span>
            <h2 class="section_title_3n9p">Privacy Policy</h2>
            <p class="text_content_7m5k"><strong>Effective Date:</strong> January 1, 2024</p>
            <p class="text_content_7m5k">TraveloxHome ("we," "our," or "us") respects your privacy and is committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our services or visit our website.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Information We Collect</h3>
            <p class="text_content_7m5k">We collect information that you provide directly to us, including but not limited to: name, email address, phone number, mailing address, payment information, and any other information you choose to provide. We also collect information about your appointments, service preferences, and communication history with us.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">How We Use Your Information</h3>
            <p class="text_content_7m5k">We use the information we collect to: provide, maintain, and improve our services; process your appointments and payments; send you confirmations, updates, and administrative messages; respond to your comments and questions; communicate with you about services, offers, and events; and comply with legal obligations.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Information Sharing</h3>
            <p class="text_content_7m5k">We do not sell, trade, or rent your personal information to third parties. We may share your information with service providers who perform services on our behalf, such as payment processing and appointment scheduling. These providers are bound by confidentiality obligations and may only use your information to provide services to us.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Data Security</h3>
            <p class="text_content_7m5k">We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Your Rights</h3>
            <p class="text_content_7m5k">You have the right to access, correct, or delete your personal information. You may also opt out of receiving promotional communications from us by following the unsubscribe instructions in those messages. To exercise these rights, please contact us using the information provided below.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Cookies and Tracking</h3>
            <p class="text_content_7m5k">We may use cookies and similar tracking technologies to collect information about your browsing activities. You can control cookies through your browser settings, though disabling cookies may affect your ability to use certain features of our website.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Changes to This Policy</h3>
            <p class="text_content_7m5k">We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the effective date. Your continued use of our services after such changes constitutes acceptance of the updated policy.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Contact Us</h3>
            <p class="text_content_7m5k">If you have questions about this Privacy Policy, please contact us at: info@traveloxhome.com or call (555) 984-7362.</p>
        </div>
    </div>

    <div id="modal_terms_8m4k" class="modal_overlay_7n3k">
        <div class="modal_content_4m8p">
            <span class="modal_close_6k2n" onclick="closeModal('terms')">&times;</span>
            <h2 class="section_title_3n9p">Terms of Service</h2>
            <p class="text_content_7m5k"><strong>Effective Date:</strong> January 1, 2024</p>
            <p class="text_content_7m5k">Welcome to TraveloxHome. By accessing or using our services, you agree to be bound by these Terms of Service. Please read them carefully before using our services.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Service Description</h3>
            <p class="text_content_7m5k">TraveloxHome provides professional makeup artistry services including but not limited to bridal makeup, event makeup, photoshoot makeup, makeup lessons, and related beauty services. All services are provided by trained and experienced makeup artists.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Booking and Appointments</h3>
            <p class="text_content_7m5k">Appointments must be booked in advance and are subject to availability. We require a deposit to secure your booking, which will be applied to your final payment. Deposits are non-refundable but may be transferred to a different date subject to availability and our rescheduling policy.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Cancellation and Rescheduling</h3>
            <p class="text_content_7m5k">Cancellations must be made at least 48 hours before your scheduled appointment to receive a refund minus the deposit. Cancellations made within 48 hours of the appointment will forfeit the full payment. Rescheduling requests should be made as early as possible and are subject to availability. We reserve the right to cancel appointments due to unforeseen circumstances and will provide a full refund in such cases.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Client Responsibilities</h3>
            <p class="text_content_7m5k">Clients are responsible for: arriving on time for appointments; providing accurate information about skin sensitivities, allergies, or medical conditions; following pre-appointment preparation instructions; and maintaining appropriate behavior during services. Late arrivals may result in shortened service time or rescheduling.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Payment Terms</h3>
            <p class="text_content_7m5k">Payment is due at the time of service unless other arrangements have been made in advance. We accept various payment methods including cash, credit cards, and digital payments. All prices are subject to change without notice, though booked appointments will honor the quoted price.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Liability and Disclaimers</h3>
            <p class="text_content_7m5k">While we take every precaution to ensure safe and high-quality services, we cannot guarantee specific results or be held liable for allergic reactions to products when proper disclosure has not been made by the client. Clients with known sensitivities should inform us before service. We are not liable for any indirect, incidental, or consequential damages arising from our services.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Intellectual Property</h3>
            <p class="text_content_7m5k">All content on our website and promotional materials, including text, graphics, logos, and images, is the property of TraveloxHome and protected by copyright laws. You may not reproduce, distribute, or create derivative works without our express written permission.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Photography and Marketing</h3>
            <p class="text_content_7m5k">We may photograph our work for portfolio and marketing purposes. By using our services, you consent to such photography unless you explicitly opt out in writing before your appointment. We respect your privacy and will not use images in ways you have not approved.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Modifications to Terms</h3>
            <p class="text_content_7m5k">We reserve the right to modify these Terms of Service at any time. Changes will be effective immediately upon posting to our website. Your continued use of our services after changes are posted constitutes acceptance of the modified terms.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Governing Law</h3>
            <p class="text_content_7m5k">These Terms of Service are governed by and construed in accordance with the laws of the State of Illinois, without regard to its conflict of law provisions. Any disputes arising from these terms or our services shall be resolved in the courts of Springfield, Illinois.</p>
            
            <h3 style="color: #667eea; margin-top: 20px; margin-bottom: 10px;">Contact Information</h3>
            <p class="text_content_7m5k">For questions about these Terms of Service, please contact us at: info@traveloxhome.com or call (555) 984-7362.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            if (type === 'privacy') {
                document.getElementById('modal_privacy_7k3n').style.display = 'block';
            } else if (type === 'terms') {
                document.getElementById('modal_terms_8m4k').style.display = 'block';
            }
            document.body.style.overflow = 'hidden';
        }

        function closeModal(type) {
            if (type === 'privacy') {
                document.getElementById('modal_privacy_7k3n').style.display = 'none';
            } else if (type === 'terms') {
                document.getElementById('modal_terms_8m4k').style.display = 'none';
            }
            document.body.style.overflow = 'auto';
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal_overlay_7n3k')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                if (this.getAttribute('href') !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    </script>

    <a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
</body>
</html>




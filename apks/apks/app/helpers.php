<?php

use App\Models\AboutPage;
use App\Models\NoticeCategory;
use App\Models\ReportCategory;
use App\Models\SiteInfo;

function getData(){
    $a = AboutPage::select('page_heading')->first();
    return $a;
}


function siteInfo(){
    $data = SiteInfo::first();
    return $data;
}
function GetReportCategory(){
    $cats = ReportCategory::all();
    return $cats;
}
function GetNoticeCategory(){
    $cats = NoticeCategory::all();
    return $cats;
}

function organizationSummarySections(){
    return [
        [
            'id' => 'introduction',
            'title' => 'Introduction',
            'content' => <<<'HTML'
<p>APKS empowers communities, promotes education, and mobilizes resources to improve lifestyles and livelihoods. It employs innovative development strategies to achieve sustainability and provides comprehensive support to disadvantaged individuals, helping them attain self-sufficiency and control over their lives.</p>
<p>APKS also works to prevent trafficking, protect the environment, and empower vulnerable populations. The organization is committed to protecting human rights and engages in public consultations, mass campaigns, and innovative initiatives with stakeholder support.</p>
<p>As a non-profit organization, APKS stands up for people’s rights and operates without discrimination based on class, tribe, origin, area, religion, or gender. It advocates for universal peace and strives to make positive changes on the planet through kindness, cooperation, and positive thinking.</p>
<p>Officially launched in 2012, APKS focuses on alleviating poverty and improving the livelihoods of marginalized individuals, particularly distressed women and children, by promoting social justice and human rights.</p>
HTML
        ],
        [
            'id' => 'background',
            'title' => 'Background',
            'content' => <<<'HTML'
<p>APKS was born from compassion during the Rana Plaza tragedy with a commitment to create long-term social impact for underprivileged, vulnerable, and marginalized communities in Bangladesh.</p>
<p>The tragic collapse of the Rana Plaza garment factory in 2013, which resulted in numerous casualties, was a pivotal moment for APKS. Under the dynamic leadership of Shamim Ara Sultana, volunteers provided crucial aid, including blood donations, food, and medical supplies. This tragedy highlighted the urgent need for sustainable development initiatives and led to the formal establishment of APKS.</p>
<p>APKS operates in Dhaka and stands out as a leading NGO focused on women and children. It was founded by youth development activists and social workers with strong backgrounds in women’s enterprise development. This gave the organization both committed leadership and broad field-based experience in socio-economic, environmental, and health development.</p>
<p>In 2014, APKS initially focused on women enterprise development for poor, marginalized, disadvantaged, and vulnerable women and children. Over time, it expanded into a holistic and multidimensional development approach that includes women’s rights, child labor, childhood development, and basic education.</p>
<p><strong>We believe in community-led, need-driven development.</strong></p>
HTML
        ],
        [
            'id' => 'motivation',
            'title' => 'Motivation',
            'content' => <<<'HTML'
<p>APKS is a community-based charity that supports civil administration systems in migrant settlements and increases support for host communities and local structures. It undertakes need-based activities such as education, health, hygiene, nutrition, sanitation, and income-generating activities for target participants with support from various donors.</p>
<p>APKS collaborates with government departments to implement programs effectively. It aligns its work with the Sustainable Development Goals (SDGs) by serving deprived urban communities, ethnic groups in remote villages, hill tracts, coastal areas, and border regions.</p>
<ul>
    <li>Uses a community-based approach to support civil administration systems in migrant settlements.</li>
    <li>Performs need-based activities in education, health, hygiene, nutrition, sanitation, and income generation.</li>
    <li>Promotes moral living, religious harmony, and truth through innovative awareness work.</li>
    <li>Focuses on sustainable development rather than one-time charity.</li>
    <li>Works with funding and partnerships from the Government of Bangladesh, local government bodies, and national and international development agencies.</li>
</ul>
HTML
        ],
        [
            'id' => 'approach',
            'title' => 'Approach',
            'content' => <<<'HTML'
<p>Our vision is to create a society where youth, women, children, disabled individuals, and ethnic communities enjoy their rights and live dignified lives in a democratic environment. We envision a world free from discrimination, where everyone has access to health, education, food, accommodation, and employment.</p>
<p>APKS is dedicated to supporting individuals without discrimination based on class, occupation, religion, color, cultural background, ethnic community, or gender. We strive to ensure sustainable development through healthcare, gender equality, and socio-economic development.</p>
<p>Our mission includes implementing development projects and awareness activities to bring positive social change, particularly for underprivileged, less fortunate, and ethnic communities. We aim to empower people affected by poverty, climate change, illiteracy, disease, and social injustice through legal, social, and economic programs.</p>
HTML
        ],
        [
            'id' => 'mission-vision',
            'title' => 'Mission & Vision',
            'content' => <<<'HTML'
<h4>Vision Statement</h4>
<p>To create a poverty-free, educated, progressive, and happy society with peace and justice, where all people live with equality, dignity, and access to their fundamental rights.</p>
<h4>Mission Statement</h4>
<p>To implement inclusive development projects and awareness initiatives that improve healthcare, education, socio-economic conditions, gender equality, legal protection, and climate resilience for underprivileged, less fortunate, and marginalized communities in Bangladesh.</p>
HTML
        ],
        [
            'id' => 'goals',
            'title' => 'Goals',
            'content' => <<<'HTML'
<ul>
    <li><strong>Poverty Alleviation and Social Inclusion:</strong> reduce poverty by improving access to basic needs and economic opportunity for marginalized communities.</li>
    <li><strong>Health and Well-being:</strong> improve health, nutrition, disease prevention, and healthcare access, especially for women, children, and differently abled individuals.</li>
    <li><strong>Education and Skill Development:</strong> expand non-formal education, vocational training, and practical skills for long-term self-sufficiency.</li>
    <li><strong>Environmental Sustainability and Disaster Risk Reduction:</strong> strengthen climate adaptation, environmental responsibility, and disaster preparedness.</li>
    <li><strong>Human Rights and Social Justice:</strong> promote legal support, gender equity, good governance, and protection for vulnerable groups.</li>
</ul>
HTML
        ],
        [
            'id' => 'objectives',
            'title' => 'Objectives',
            'content' => <<<'HTML'
<ul>
    <li><strong>Community Empowerment:</strong> strengthen local initiatives, build local capital, and mobilize resources for disadvantaged communities.</li>
    <li><strong>Gender Equality and Social Change:</strong> improve socio-economic status through education, entrepreneurship, and collaboration with public and private stakeholders.</li>
    <li><strong>Holistic Development Programs:</strong> combine health, education, rehabilitation, advocacy, and economic empowerment in integrated interventions.</li>
    <li><strong>Support and Rehabilitation:</strong> protect and reintegrate highly vulnerable women, children, street-connected children, and conflict-affected people.</li>
    <li><strong>Disaster Response and Environmental Protection:</strong> respond to crises, promote preparedness, and protect natural environments for safer communities.</li>
</ul>
HTML
        ],
        [
            'id' => 'target-group',
            'title' => 'Target Group',
            'content' => <<<'HTML'
<p>APKS works with disadvantaged and underserved populations across Bangladesh, including:</p>
<ul>
    <li>Disadvantaged urban community</li>
    <li>Less fortunate semi-urban society</li>
    <li>Most vulnerable rural community</li>
    <li>Marginalized ethnic minorities</li>
    <li>Lower middle class farm families</li>
    <li>Landless small farmers</li>
    <li>Riverine communities</li>
    <li>Tribal people and disaster-affected people</li>
</ul>
<p><strong>Particular Focus Sector:</strong> women, widow, divorcee, women-headed households, youth, adolescents, mothers and children, differently able people, and community-based organizations.</p>
<p><strong>Particular Focus Group:</strong> vulnerable children, Bangali women, aboriginal men, tribal people, third gender, migrants, and refugees.</p>
HTML
        ],
        [
            'id' => 'core-values',
            'title' => 'Core Values',
            'content' => <<<'HTML'
<ul>
    <li><strong>Integrity and Accountability:</strong> We are honest, open, trustworthy, and accountable in all our dealings with stakeholders, partners, and donors.</li>
    <li><strong>Compassion and Respect:</strong> We prioritize children, women, and youth living in difficulties and respond to the most vulnerable with honor, love, affection, and respect.</li>
    <li><strong>Social Justice and Human Rights:</strong> We believe in people’s rights, human dignity, gender equality, social inclusion, and safety nets.</li>
    <li><strong>Sustainability and Good Governance:</strong> We are committed to a green environment, networking, partnerships, and responsible governance.</li>
    <li><strong>Commitment and Dedication:</strong> We remain faithful and steadfast in serving communities with enthusiasm, integrity, humility, loyalty, participation, and respect for all religions.</li>
</ul>
HTML
        ],
        [
            'id' => 'areas-of-intervention',
            'title' => 'Areas of Intervention',
            'content' => <<<'HTML'
<ul>
    <li><strong>Education:</strong> non-formal education, pre-primary education, formal education, and education scholarship.</li>
    <li><strong>Advocacy Program:</strong> advocacy and lobbying, good governance, capacity development, women and child trafficking prevention, human rights and gender equality, legal support, dispute and settlement.</li>
    <li><strong>Agriculture:</strong> agricultural production, crop diversification, seed promotion, production and disbursement, technology transfer.</li>
    <li><strong>Environment, Forestry, and Social Development:</strong> technology transfer, awareness, mobilization and campaign, health institution support, fisheries and livestock, fish culture, poultry and hatchery, biomass plant and forestry, renewable energy, nursery and tree plantation, vegetable gardening, shelter support, dairy and goat rearing.</li>
    <li><strong>Healthcare:</strong> emergency health care, health camp, treatment aid, health and family planning, nutrition, water and sanitation, nursing and midwifery.</li>
    <li><strong>Skill Development:</strong> soft skill development, hard skill development, vocational training.</li>
    <li><strong>Entrepreneurship Development:</strong> life-skill venture promotion, commercial enterprise development, social business development, marketing and networking development.</li>
    <li><strong>Disaster Management:</strong> pre-disaster awareness, post-disaster relief distribution, rehabilitation support.</li>
    <li><strong>Micro Finance:</strong> micro credit and micro enterprise, technical micro finance, flexible micro credit for hard core poor households, savings and need-based financial support.</li>
</ul>
<p><strong>Operational Geography:</strong> Dhaka Division, Rangpur Division, and Chittagong Division.</p>
HTML
        ],
        [
            'id' => 'projects',
            'title' => 'Projects',
            'content' => <<<'HTML'
<p>APKS implements a wide range of practical projects that translate its mission into measurable community impact. Major initiatives include:</p>
<ul>
    <li><strong>Education and Non-Formal Education:</strong> enrolled 1,200 children in NFE programs, with 800 transitioning to formal education.</li>
    <li><strong>Rehabilitation Program:</strong> supported 500 families with assets, housing, and small capital for self-reliance.</li>
    <li><strong>Health and Hygiene Programme:</strong> improved hygiene practices and reduced preventable diseases through weekly awareness sessions.</li>
    <li><strong>Eid Food Distribution:</strong> distributed 1,000 food packages benefiting around 5,000 people.</li>
    <li><strong>Qurbani Meat Distribution:</strong> distributed 3,000 kilograms of meat to 6,000 beneficiaries.</li>
    <li><strong>Fresh Fruits Distribution:</strong> improved nutrition for 1,200 women and children through seasonal fruit distribution.</li>
    <li><strong>Book Distribution:</strong> delivered 5,000 books to 20 institutions in remote areas.</li>
    <li><strong>Vocational Training Centers:</strong> trained 300 people in cottage industries and electrical work.</li>
    <li><strong>Employment Program:</strong> created work opportunities for 400 people through SME and cooperative initiatives.</li>
    <li><strong>Deep Water Wells:</strong> installed 50 tube wells to provide safe water for 500 families.</li>
    <li><strong>Agriculture Project:</strong> supported 600 farmers with seeds, cattle, and livestock recovery assistance.</li>
    <li><strong>Medical Aid for the Poor:</strong> financed treatment and medicines for people with chronic illness.</li>
    <li><strong>Marriage Support:</strong> assisted financially vulnerable couples, especially orphans and poor families.</li>
    <li><strong>Winter Clothing Distribution:</strong> provided blankets and warm clothing for cold-affected northern communities.</li>
    <li><strong>Entrepreneurship Support:</strong> backed 150 entrepreneurs and helped generate employment for 500 people.</li>
    <li><strong>Education Scholarships:</strong> supported 200 talented students from financially challenged families.</li>
    <li><strong>Housing for the Homeless:</strong> built and repaired homes for disaster-affected and rootless families.</li>
    <li><strong>Post-Disaster Rehabilitation:</strong> restored livelihoods, shelter, and dignity after natural calamities.</li>
    <li><strong>Sanitary Latrine Construction:</strong> improved hygiene and sanitation in underserved communities and camps.</li>
    <li><strong>Eye Cataract Operations:</strong> organized free treatment and surgery to restore vision.</li>
    <li><strong>Circumcision Project:</strong> supported safe and hygienic procedures for children from poor families.</li>
    <li><strong>Free Health Camps:</strong> delivered treatment, prescriptions, and medicine in refugee, flood-affected, and remote areas.</li>
    <li><strong>Third Gender Craft and Training Center:</strong> created training and earning opportunities for socially excluded communities.</li>
    <li><strong>Old Age Allowance:</strong> provided regular support for senior citizens facing loneliness and financial hardship.</li>
    <li><strong>Electric House Wiring Training:</strong> trained unemployed youth for self-employment and technical jobs.</li>
    <li><strong>Computer Training Center:</strong> built digital skills in basic computing, graphic design, web, and software development.</li>
    <li><strong>Blood Donation and Component Support:</strong> organized donor networks and emergency blood collection.</li>
    <li><strong>Road Safety Awareness:</strong> reached thousands through awareness campaigns and driver training.</li>
    <li><strong>Rapid Response for Flood-Affected People:</strong> delivered food, medicine, shelter materials, and rehabilitation support.</li>
    <li><strong>COVID-19 Response:</strong> provided masks, sanitizer, telemedicine, relief, cooked food, and cash support.</li>
    <li><strong>Sadqah Zaria Projects:</strong> mosque construction, madrasah support, student sponsorship, Wudhukhana building, Quranic Maktab, and Imam and teacher training.</li>
</ul>
<p>Through these projects, APKS combines relief, rehabilitation, education, protection, and economic empowerment to deliver lasting social impact.</p>
HTML
        ],
    ];
}

function organizationSummaryDefaultContent(){
    return collect(organizationSummarySections())
        ->map(function ($section) {
            return '<section id="'.$section['id'].'" class="org-summary-section"><h3>'.$section['title'].'</h3>'.$section['content'].'</section>';
        })
        ->implode('');
}

function apksProjectCatalog(){
    return [
        [
            'title' => 'Education and Non-Formal Education (NFE)',
            'category' => 'Education & Skills',
            'description' => <<<'HTML'
<p>Education is fundamental to APKS's mission, as the organization views learning as the foundation of empowerment and sustainable development.</p>
<ul>
    <li><strong>Situation:</strong> Low literacy rates and limited access to formal education in many communities.</li>
    <li><strong>Task:</strong> Improve literacy and educational engagement among children and community members.</li>
    <li><strong>Action:</strong> Implemented education programs, including NFE initiatives, and supported children in transitioning to formal education.</li>
    <li><strong>Result:</strong> Enrolled 1,200 children in NFE programs, with 800 transitioning to formal education and community literacy rates increasing by 15%.</li>
</ul>
HTML
        ],
        [
            'title' => 'Rehabilitation Program',
            'category' => 'Rehabilitation & Housing',
            'description' => <<<'HTML'
<p>APKS believes sustainable development begins by helping vulnerable people become self-reliant.</p>
<ul>
    <li><strong>Situation:</strong> High need for rehabilitation to ensure long-term sustainable development.</li>
    <li><strong>Task:</strong> Rehabilitate needy families by providing resources for economic independence.</li>
    <li><strong>Action:</strong> Used zakat funds and donations to provide vehicles, cattle, small business capital, and homes for people displaced by natural disasters.</li>
    <li><strong>Result:</strong> Rehabilitated 500 families, reduced poverty levels by 40%, and helped 80% of beneficiaries achieve self-reliance.</li>
</ul>
HTML
        ],
        [
            'title' => 'Health and Hygiene Programme',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>APKS promotes good health and hygiene practices through continuous community education and awareness-building.</p>
<ul>
    <li><strong>Situation:</strong> Limited awareness and poor hygiene practices in underserved communities.</li>
    <li><strong>Task:</strong> Improve health and hygiene awareness among community members.</li>
    <li><strong>Action:</strong> Conducted weekly group meetings focused on hygiene, sanitation, and disease prevention.</li>
    <li><strong>Result:</strong> 95% of 2,500 participants attended regularly, contributing to a 30% improvement in hygiene practices and a 20% reduction in preventable diseases.</li>
</ul>
HTML
        ],
        [
            'title' => 'Eid Food Distribution',
            'category' => 'Relief & Seasonal Support',
            'description' => <<<'HTML'
<p>APKS supports vulnerable families during Eid and Ramadan by distributing essential food items with dignity.</p>
<ul>
    <li><strong>Situation:</strong> Food insecurity among economically disadvantaged urban residents during festive periods.</li>
    <li><strong>Task:</strong> Provide essential food support to vulnerable households.</li>
    <li><strong>Action:</strong> Distributed packages containing rice, oil, onion, potato, sugar, flour, salt, lentil, milk powder, vermicelli, chickpea, puffed rice, and spices.</li>
    <li><strong>Result:</strong> Distributed 1,000 food packages, benefiting 5,000 individuals.</li>
</ul>
HTML
        ],
        [
            'title' => 'Qurbani Meat Distribution',
            'category' => 'Relief & Seasonal Support',
            'description' => <<<'HTML'
<p>APKS ensures poor families can share in the joy and nutrition of Eid-ul-Adha.</p>
<ul>
    <li><strong>Situation:</strong> Many needy individuals could not afford meat during Eid-ul-Adha.</li>
    <li><strong>Task:</strong> Enable vulnerable people to participate in Eid-ul-Adha celebrations.</li>
    <li><strong>Action:</strong> Distributed Qurbani meat to destitute individuals, refugees, and ethnic communities.</li>
    <li><strong>Result:</strong> Distributed 3,000 kilograms of meat to 6,000 beneficiaries.</li>
</ul>
HTML
        ],
        [
            'title' => 'Fresh Fruits Distribution',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>Seasonal fruit distribution improves nutrition among underprivileged women and children.</p>
<ul>
    <li><strong>Situation:</strong> Deprived communities lacked access to fresh and nutritious fruits.</li>
    <li><strong>Task:</strong> Improve nutritional intake in underserved communities.</li>
    <li><strong>Action:</strong> Distributed seasonal fruits, including mangoes, to children and women in underprivileged areas.</li>
    <li><strong>Result:</strong> Distributed 2,500 kilograms of fruit, improving nutrition for 1,200 beneficiaries.</li>
</ul>
HTML
        ],
        [
            'title' => 'Book Distribution',
            'category' => 'Education & Skills',
            'description' => <<<'HTML'
<p>APKS supports education and research by delivering academic resources to remote institutions.</p>
<ul>
    <li><strong>Situation:</strong> Institutions in remote areas lacked academic and research books.</li>
    <li><strong>Task:</strong> Strengthen learning and research resources.</li>
    <li><strong>Action:</strong> Distributed literature, academic books, and research materials to centers, libraries, and institutions.</li>
    <li><strong>Result:</strong> Delivered 5,000 books to 20 institutions, benefiting more than 3,000 students and researchers.</li>
</ul>
HTML
        ],
        [
            'title' => 'Instituting Vocational Training Center',
            'category' => 'Education & Skills',
            'description' => <<<'HTML'
<p>Vocational training equips people with practical skills for employment and self-employment.</p>
<ul>
    <li><strong>Situation:</strong> High poverty rates and limited job opportunities in remote areas.</li>
    <li><strong>Task:</strong> Provide practical vocational training linked to livelihoods.</li>
    <li><strong>Action:</strong> Established training centers in cottage industries and electrical work, with equipment support such as tool boxes.</li>
    <li><strong>Result:</strong> Trained 300 individuals, with 70% securing jobs or starting businesses.</li>
</ul>
HTML
        ],
        [
            'title' => 'Employment Program',
            'category' => 'Entrepreneurship & Livelihoods',
            'description' => <<<'HTML'
<p>APKS creates local job opportunities to strengthen rural economies and reduce dependence on relief.</p>
<ul>
    <li><strong>Situation:</strong> High unemployment rates, worsened by the post-pandemic economy.</li>
    <li><strong>Task:</strong> Create practical employment opportunities in rural areas.</li>
    <li><strong>Action:</strong> Initiated SME and cooperative management programs based on local demand, with training and career development support.</li>
    <li><strong>Result:</strong> Created employment opportunities for 400 individuals, with 80% securing stable work or launching enterprises.</li>
</ul>
HTML
        ],
        [
            'title' => 'Laying Deep Water Wells',
            'category' => 'WASH & Environment',
            'description' => <<<'HTML'
<p>APKS addresses water insecurity by installing deep tube wells in underserved and disaster-prone areas.</p>
<ul>
    <li><strong>Situation:</strong> Scarcity of safe and arsenic-free drinking water in disaster-affected and southern regions.</li>
    <li><strong>Task:</strong> Provide reliable access to safe drinking water.</li>
    <li><strong>Action:</strong> Installed deep tube wells and involved local stakeholders in management and maintenance.</li>
    <li><strong>Result:</strong> Installed 50 tube wells, serving 500 families.</li>
</ul>
HTML
        ],
        [
            'title' => 'Agriculture Project',
            'category' => 'Agriculture & Livelihoods',
            'description' => <<<'HTML'
<p>APKS helps farmers recover from natural calamities and rebuild agricultural livelihoods.</p>
<ul>
    <li><strong>Situation:</strong> Frequent disasters damaged fields, crops, and livestock.</li>
    <li><strong>Task:</strong> Support farmers in recovering and sustaining livelihoods.</li>
    <li><strong>Action:</strong> Distributed seeds, cattle for cultivation, and cows and goats for animal husbandry.</li>
    <li><strong>Result:</strong> Assisted 600 farmers, reduced poverty levels by 35%, and improved food security.</li>
</ul>
HTML
        ],
        [
            'title' => 'Medical Aid for Poor',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>APKS provides financial and medicine support for poor people suffering from chronic illness.</p>
<ul>
    <li><strong>Situation:</strong> Poor and needy individuals were unable to afford treatment for chronic diseases.</li>
    <li><strong>Task:</strong> Ensure treatment support for vulnerable patients.</li>
    <li><strong>Action:</strong> Covered treatment costs and provided medicine support.</li>
    <li><strong>Result:</strong> Supported 150 individuals in receiving necessary care and improved their quality of life.</li>
</ul>
HTML
        ],
        [
            'title' => 'Project Marriage',
            'category' => 'Social Protection & Community Support',
            'description' => <<<'HTML'
<p>APKS supports poor families so marriages can take place with dignity and reasonable expense.</p>
<ul>
    <li><strong>Situation:</strong> Many boys and girls from poor families could not afford marriage expenses.</li>
    <li><strong>Task:</strong> Provide support for financially vulnerable people to marry.</li>
    <li><strong>Action:</strong> Funded marriage expenses, especially for orphans and underprivileged families.</li>
    <li><strong>Result:</strong> Supported 100 marriages and strengthened family stability and community solidarity.</li>
</ul>
HTML
        ],
        [
            'title' => 'Winter Clothing Distribution',
            'category' => 'Relief & Seasonal Support',
            'description' => <<<'HTML'
<p>Winter support protects vulnerable people in severely cold regions of Bangladesh.</p>
<ul>
    <li><strong>Situation:</strong> Severe cold conditions in northern districts and inadequate warm clothing.</li>
    <li><strong>Task:</strong> Provide blankets and warm clothing.</li>
    <li><strong>Action:</strong> Distributed thousands of blankets in Panchagarh, Kurigram, and Dinajpur.</li>
    <li><strong>Result:</strong> Provided warmth and protection to 2,000 individuals.</li>
</ul>
HTML
        ],
        [
            'title' => 'Project Entrepreneurship',
            'category' => 'Entrepreneurship & Livelihoods',
            'description' => <<<'HTML'
<p>APKS promotes entrepreneurship as a pathway to income generation and local economic growth.</p>
<ul>
    <li><strong>Situation:</strong> Competitive job markets pushed many people to seek entrepreneurial opportunities.</li>
    <li><strong>Task:</strong> Encourage and support enterprise creation.</li>
    <li><strong>Action:</strong> Provided assistance in promising sectors like agriculture, farming, and transportation with close monitoring.</li>
    <li><strong>Result:</strong> Supported 150 entrepreneurs and helped create job opportunities for 500 people.</li>
</ul>
HTML
        ],
        [
            'title' => 'Education Scholarship',
            'category' => 'Education & Skills',
            'description' => <<<'HTML'
<p>Scholarship support helps talented students from poor families continue their education.</p>
<ul>
    <li><strong>Situation:</strong> Talented students faced financial barriers and risked dropping out.</li>
    <li><strong>Task:</strong> Keep disadvantaged students in education.</li>
    <li><strong>Action:</strong> Offered scholarship support to continue schooling.</li>
    <li><strong>Result:</strong> Supported 200 students and reduced dropout risk.</li>
</ul>
HTML
        ],
        [
            'title' => 'Constructing Home for Homeless',
            'category' => 'Rehabilitation & Housing',
            'description' => <<<'HTML'
<p>APKS builds and repairs homes for homeless and rootless families affected by disaster and poverty.</p>
<ul>
    <li><strong>Situation:</strong> Homelessness caused by natural calamities and extreme vulnerability.</li>
    <li><strong>Task:</strong> Provide permanent shelter and rehabilitation.</li>
    <li><strong>Action:</strong> Built and repaired homes and sometimes acquired land for long-term settlement.</li>
    <li><strong>Result:</strong> Constructed 50 homes, providing secure housing for 200 individuals.</li>
</ul>
HTML
        ],
        [
            'title' => 'Rehabilitation Program After Natural Calamities',
            'category' => 'Disaster Response & Climate Resilience',
            'description' => <<<'HTML'
<p>Post-disaster rehabilitation helps affected people restore livelihoods, shelter, and dignity.</p>
<ul>
    <li><strong>Situation:</strong> Frequent disasters caused loss of land, homes, and livelihoods.</li>
    <li><strong>Task:</strong> Provide rehabilitation and recovery support.</li>
    <li><strong>Action:</strong> Arranged shelter, managed job opportunities, and provided educational sponsorships.</li>
    <li><strong>Result:</strong> Rehabilitated 300 individuals and restored self-reliance.</li>
</ul>
HTML
        ],
        [
            'title' => 'Constructing Sanitary Latrine',
            'category' => 'WASH & Environment',
            'description' => <<<'HTML'
<p>Sanitation support improves dignity, hygiene, and disease prevention in underserved locations.</p>
<ul>
    <li><strong>Situation:</strong> Lack of safe and healthy latrines in remote, disaster-affected, and refugee areas.</li>
    <li><strong>Task:</strong> Provide safe and sanitary toilet facilities.</li>
    <li><strong>Action:</strong> Built healthy toilets in vulnerable communities.</li>
    <li><strong>Result:</strong> Constructed 100 sanitary latrines, benefiting 400 families.</li>
</ul>
HTML
        ],
        [
            'title' => 'Eye Cataracts Operation Project',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>APKS restores sight for poor cataract patients through free treatment and operations.</p>
<ul>
    <li><strong>Situation:</strong> Many people with cataracts could not afford treatment.</li>
    <li><strong>Task:</strong> Provide free eye operations and medicine.</li>
    <li><strong>Action:</strong> Organized health camps with certified doctors for diagnosis, treatment, and surgery.</li>
    <li><strong>Result:</strong> Conducted 200 cataract operations and restored vision for 200 individuals.</li>
</ul>
HTML
        ],
        [
            'title' => 'Circumcision Project',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>APKS supports safe and hygienic circumcision services for children from poor families.</p>
<ul>
    <li><strong>Situation:</strong> Rural families were unable to afford circumcision procedures for their children.</li>
    <li><strong>Task:</strong> Provide safe procedures aligned with health and cultural needs.</li>
    <li><strong>Action:</strong> Supported circumcision operations with attention to hygiene and health consciousness.</li>
    <li><strong>Result:</strong> Conducted 150 circumcision operations.</li>
</ul>
HTML
        ],
        [
            'title' => 'Free Health Camp',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>Free health camps expand access to treatment in poverty-stricken, remote, and crisis-affected areas.</p>
<ul>
    <li><strong>Situation:</strong> Limited health awareness and weak access to healthcare services.</li>
    <li><strong>Task:</strong> Provide free healthcare to underserved communities.</li>
    <li><strong>Action:</strong> Organized camps with qualified doctors offering treatment, prescriptions, and medicine.</li>
    <li><strong>Result:</strong> Served 1,000 individuals in refugee camps, flood-affected locations, and remote regions.</li>
</ul>
HTML
        ],
        [
            'title' => 'APKS Craft & Training Center for Third Gender & Bohemian',
            'category' => 'Social Inclusion & Rights',
            'description' => <<<'HTML'
<p>APKS promotes social integration and economic independence for marginalized communities through skill-building and employment.</p>
<ul>
    <li><strong>Situation:</strong> Third-gender individuals and bohemians faced social exclusion and lack of work opportunities.</li>
    <li><strong>Task:</strong> Establish a training center and production facility.</li>
    <li><strong>Action:</strong> Started a boutique with dyeing sections run by third-gender participants and linked products to e-commerce and physical outlets.</li>
    <li><strong>Result:</strong> Trained and employed 50 individuals.</li>
</ul>
HTML
        ],
        [
            'title' => 'Old Age Allowance',
            'category' => 'Social Protection & Community Support',
            'description' => <<<'HTML'
<p>APKS provides regular support to elderly people facing loneliness and financial hardship.</p>
<ul>
    <li><strong>Situation:</strong> Senior citizens struggled with insecurity and isolation.</li>
    <li><strong>Task:</strong> Provide regular financial assistance.</li>
    <li><strong>Action:</strong> Distributed allowances to vulnerable elderly beneficiaries.</li>
    <li><strong>Result:</strong> Supported 200 senior citizens and improved their quality of life.</li>
</ul>
HTML
        ],
        [
            'title' => 'Electric House Wiring Training',
            'category' => 'Education & Skills',
            'description' => <<<'HTML'
<p>Technical training helps unemployed youth build income opportunities through practical trade skills.</p>
<ul>
    <li><strong>Situation:</strong> High unemployment among youth in remote areas.</li>
    <li><strong>Task:</strong> Train young people in electrical house wiring.</li>
    <li><strong>Action:</strong> Conducted training sessions and provided tools and equipment.</li>
    <li><strong>Result:</strong> Trained 100 youth for self-employment or technical work.</li>
</ul>
HTML
        ],
        [
            'title' => 'Computer Training Center',
            'category' => 'Education & Skills',
            'description' => <<<'HTML'
<p>Digital skills training prepares youth for modern employment and entrepreneurship.</p>
<ul>
    <li><strong>Situation:</strong> Many youth lacked basic and advanced computer skills.</li>
    <li><strong>Task:</strong> Provide comprehensive digital training.</li>
    <li><strong>Action:</strong> Offered courses in basic computing, graphic design, web development, and software development, with stipends for needy students.</li>
    <li><strong>Result:</strong> Trained 150 students and improved their employability.</li>
</ul>
HTML
        ],
        [
            'title' => 'Blood Donation and Blood Component Support',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>APKS organizes donor networks and blood drives to support medical emergencies.</p>
<ul>
    <li><strong>Situation:</strong> Emergency cases required reliable blood support.</li>
    <li><strong>Task:</strong> Build a responsive donor network and promote donation.</li>
    <li><strong>Action:</strong> Conducted blood donation drives and blood grouping campaigns.</li>
    <li><strong>Result:</strong> Collected 500 units of blood and supported numerous emergencies.</li>
</ul>
HTML
        ],
        [
            'title' => 'Creating Awareness on Road Safety',
            'category' => 'Advocacy & Public Awareness',
            'description' => <<<'HTML'
<p>APKS addresses road safety through awareness and practical training.</p>
<ul>
    <li><strong>Situation:</strong> High road accident rates caused injuries and loss of life.</li>
    <li><strong>Task:</strong> Promote safer driving and road safety awareness.</li>
    <li><strong>Action:</strong> Conducted awareness campaigns and driver training sessions.</li>
    <li><strong>Result:</strong> Reached 10,000 individuals and promoted safer practices.</li>
</ul>
HTML
        ],
        [
            'title' => 'Rapid Response for Flood-Affected People',
            'category' => 'Disaster Response & Climate Resilience',
            'description' => <<<'HTML'
<p>APKS responds quickly to floods with emergency relief and recovery support.</p>
<ul>
    <li><strong>Situation:</strong> Flooding caused widespread damage and displacement.</li>
    <li><strong>Task:</strong> Deliver immediate and post-disaster support.</li>
    <li><strong>Action:</strong> Distributed food, medicine, shelter materials, and rehabilitation assistance.</li>
    <li><strong>Result:</strong> Assisted 1,000 flood-affected individuals.</li>
</ul>
HTML
        ],
        [
            'title' => 'Iftar Distribution',
            'category' => 'Relief & Seasonal Support',
            'description' => <<<'HTML'
<p>APKS distributes Iftar packages so vulnerable families can observe Ramadan with dignity.</p>
<ul>
    <li><strong>Situation:</strong> Poor households could not afford Iftar essentials during Ramadan.</li>
    <li><strong>Task:</strong> Provide Iftar food support.</li>
    <li><strong>Action:</strong> Distributed packages containing rice, chickpeas, dates, and other essentials across urban and rural areas.</li>
    <li><strong>Result:</strong> Supported 1,000 families.</li>
</ul>
HTML
        ],
        [
            'title' => 'Eid Gift Distribution',
            'category' => 'Relief & Seasonal Support',
            'description' => <<<'HTML'
<p>Festive gift support helps low-income families celebrate Eid with dignity and joy.</p>
<ul>
    <li><strong>Situation:</strong> Financially challenged individuals were unable to celebrate Eid properly.</li>
    <li><strong>Task:</strong> Distribute Eid gifts to people in need.</li>
    <li><strong>Action:</strong> Provided Eid packages to rickshaw pullers, drivers, teachers, and other low-income community members.</li>
    <li><strong>Result:</strong> Distributed 500 Eid packages.</li>
</ul>
HTML
        ],
        [
            'title' => 'Cooked Food Distribution During Lockdown',
            'category' => 'Relief & Seasonal Support',
            'description' => <<<'HTML'
<p>During lockdowns, APKS distributed cooked meals to groups facing immediate hunger.</p>
<ul>
    <li><strong>Situation:</strong> Daily wage earners and street-connected children faced severe food shortages during lockdowns.</li>
    <li><strong>Task:</strong> Provide ready-to-eat meals to vulnerable populations.</li>
    <li><strong>Action:</strong> Distributed cooked food to workers and street children.</li>
    <li><strong>Result:</strong> Delivered 1,000 meals and reduced acute food insecurity.</li>
</ul>
HTML
        ],
        [
            'title' => 'Telemedicine Service',
            'category' => 'Healthcare & Nutrition',
            'description' => <<<'HTML'
<p>Telemedicine kept healthcare accessible during the COVID-19 crisis.</p>
<ul>
    <li><strong>Situation:</strong> Pandemic restrictions limited access to in-person healthcare.</li>
    <li><strong>Task:</strong> Provide remote medical consultations.</li>
    <li><strong>Action:</strong> Built a telemedicine network with volunteer doctors using phone and video support.</li>
    <li><strong>Result:</strong> Provided medical consultations to 2,000 individuals.</li>
</ul>
HTML
        ],
        [
            'title' => 'Relief Distribution During Lockdown',
            'category' => 'Relief & Seasonal Support',
            'description' => <<<'HTML'
<p>APKS distributed relief packages so vulnerable families could meet basic needs during lockdown.</p>
<ul>
    <li><strong>Situation:</strong> Lockdowns created severe economic hardship for low-income households.</li>
    <li><strong>Task:</strong> Provide essential relief support to affected families.</li>
    <li><strong>Action:</strong> Distributed relief packages containing daily necessities and food items.</li>
    <li><strong>Result:</strong> Helped vulnerable households maintain basic survival needs during the crisis period.</li>
</ul>
HTML
        ],
        [
            'title' => 'Cash Distribution During COVID-19',
            'category' => 'Social Protection & Community Support',
            'description' => <<<'HTML'
<p>Cash support helped vulnerable families manage urgent expenses during the pandemic.</p>
<ul>
    <li><strong>Situation:</strong> Families experienced acute financial distress during COVID-19.</li>
    <li><strong>Task:</strong> Provide immediate financial assistance.</li>
    <li><strong>Action:</strong> Distributed cash grants for urgent needs including food and medicine.</li>
    <li><strong>Result:</strong> Assisted 300 families.</li>
</ul>
HTML
        ],
        [
            'title' => 'Response on COVID-19',
            'category' => 'Disaster Response & Climate Resilience',
            'description' => <<<'HTML'
<p>APKS implemented a multi-sector pandemic response covering health, protection, and relief.</p>
<ul>
    <li><strong>Situation:</strong> COVID-19 created combined health and economic crises.</li>
    <li><strong>Task:</strong> Deliver comprehensive support to affected communities.</li>
    <li><strong>Action:</strong> Distributed masks, hand sanitizers, food packages, and telemedicine support.</li>
    <li><strong>Result:</strong> Supported 5,000 individuals through multiple interventions.</li>
</ul>
HTML
        ],
        [
            'title' => 'Projects Sadqah Zaria',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>APKS runs faith-based welfare projects that combine spiritual development with community support.</p>
<ul>
    <li><strong>Situation:</strong> Remote and underprivileged areas lacked key Islamic infrastructure and educational facilities.</li>
    <li><strong>Task:</strong> Implement projects that support welfare and Islamic education.</li>
    <li><strong>Action:</strong> Advanced mosque construction, Madrasah establishment, student sponsorship, Wudhukhana construction, Sunnah wedding support, Quranic Maktab, and Imam and teacher training.</li>
    <li><strong>Result:</strong> Benefited numerous communities through essential infrastructure and educational support.</li>
</ul>
HTML
        ],
        [
            'title' => 'The Mosque Project',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>Mosque construction strengthens worship, education, and community cohesion in underserved areas.</p>
<ul>
    <li><strong>Situation:</strong> Communities lacked proper mosque facilities and had to travel long distances for congregational prayer.</li>
    <li><strong>Task:</strong> Construct mosques in remote regions and refugee camps.</li>
    <li><strong>Action:</strong> Conducted surveys, coordinated with local stakeholders, obtained Waqf land, consulted scholars, and monitored construction.</li>
    <li><strong>Result:</strong> Completed projects in Panchagarh, Kurigram, Cox’s Bazar Rohingya Camp, and other locations.</li>
</ul>
HTML
        ],
        [
            'title' => 'Madrasah for All',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>APKS expands access to Islamic education in remote communities through Madrasah development.</p>
<ul>
    <li><strong>Situation:</strong> Lack of Islamic education facilities contributed to social and educational deprivation.</li>
    <li><strong>Task:</strong> Establish Madrasahs and ensure sustainable operations.</li>
    <li><strong>Action:</strong> Built institutions, engaged stakeholders, supplied materials, supported teachers, and monitored activities.</li>
    <li><strong>Result:</strong> Enabled access to Islamic education for hundreds of students.</li>
</ul>
HTML
        ],
        [
            'title' => 'Student Sponsorship',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>Student sponsorship supports tuition, nutrition, health, and learning materials for underprivileged children.</p>
<ul>
    <li><strong>Situation:</strong> Financial constraints prevented students from continuing education.</li>
    <li><strong>Task:</strong> Remove barriers to continued study.</li>
    <li><strong>Action:</strong> Sponsored students in Madrasahs and schools with tuition, stationery, uniforms, and welfare support.</li>
    <li><strong>Result:</strong> Helped students focus on study and pursue academic excellence.</li>
</ul>
HTML
        ],
        [
            'title' => 'Building Wudhukhana',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>Wudhukhana facilities with safe water improve ablution access and hygiene around places of worship.</p>
<ul>
    <li><strong>Situation:</strong> Prayer spaces lacked proper Wudhukhana facilities.</li>
    <li><strong>Task:</strong> Build Wudhukhana facilities with deep tube wells.</li>
    <li><strong>Action:</strong> Constructed facilities to ensure access to clean water for ablution.</li>
    <li><strong>Result:</strong> Improved hygiene and supported proper purification rituals for worshippers.</li>
</ul>
HTML
        ],
        [
            'title' => 'Madrasah Sponsorship',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>APKS supports financially struggling Madrasahs to maintain continuity of education, especially during crises.</p>
<ul>
    <li><strong>Situation:</strong> Madrasahs faced financial and operational challenges, especially during COVID-19.</li>
    <li><strong>Task:</strong> Reduce financial strain and keep education running.</li>
    <li><strong>Action:</strong> Provided financial support, monitored operations, and addressed management challenges.</li>
    <li><strong>Result:</strong> Sustained Madrasah operations and preserved learning opportunities for students.</li>
</ul>
HTML
        ],
        [
            'title' => 'Project Sunnah Wedding',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>APKS promotes simple, values-based weddings rooted in Sunnah traditions.</p>
<ul>
    <li><strong>Situation:</strong> Social pressure encouraged extravagant weddings and financial burden.</li>
    <li><strong>Task:</strong> Support youth who choose Sunnah weddings.</li>
    <li><strong>Action:</strong> Offered guidance and support focused on simplicity and Islamic values.</li>
    <li><strong>Result:</strong> Encouraged modesty, community acceptance, and spiritually grounded marriages.</li>
</ul>
HTML
        ],
        [
            'title' => 'Founding Quranic Maktab',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>Quranic Maktab schools help children in underserved communities gain foundational Islamic education.</p>
<ul>
    <li><strong>Situation:</strong> Remote communities lacked Quranic Maktab schools.</li>
    <li><strong>Task:</strong> Establish Maktab schools in underserved areas.</li>
    <li><strong>Action:</strong> Created schools with morning and afternoon shifts, provided materials, and promoted Quranic learning.</li>
    <li><strong>Result:</strong> Expanded access to essential Islamic knowledge and values for children.</li>
</ul>
HTML
        ],
        [
            'title' => 'Organizing Imam & Teachers Training',
            'category' => 'Faith-Based Community Development',
            'description' => <<<'HTML'
<p>Training for Imams and teachers strengthens Islamic education and community leadership in remote regions.</p>
<ul>
    <li><strong>Situation:</strong> Limited access to professional training for Imams and teachers in remote areas.</li>
    <li><strong>Task:</strong> Improve their teaching and leadership capacity.</li>
    <li><strong>Action:</strong> Conducted specialized training with qualified trainers, scholars, and experts.</li>
    <li><strong>Result:</strong> Enhanced the skills of local Imams and teachers to better serve their communities.</li>
</ul>
HTML
        ],
    ];
}

function apksProjectCategories()
{
    return [
        [
            'name' => 'General Projects',
            'description' => 'Miscellaneous or legacy projects that do not fit a dedicated APKS category.',
        ],
        [
            'name' => 'Education & Skills',
            'description' => 'Projects focused on literacy, scholarships, vocational training, technical training, and practical skill development.',
        ],
        [
            'name' => 'Healthcare & Nutrition',
            'description' => 'Projects related to emergency care, treatment support, health camps, hygiene, telemedicine, blood support, and nutrition.',
        ],
        [
            'name' => 'Relief & Seasonal Support',
            'description' => 'Projects providing food, gifts, clothing, and rapid support during Eid, Ramadan, winter, lockdown, and other hardship periods.',
        ],
        [
            'name' => 'Rehabilitation & Housing',
            'description' => 'Projects supporting self-reliance, rebuilding lives, and providing homes and rehabilitation for vulnerable families.',
        ],
        [
            'name' => 'Entrepreneurship & Livelihoods',
            'description' => 'Projects that create jobs, support entrepreneurship, and improve local economic resilience.',
        ],
        [
            'name' => 'Agriculture & Livelihoods',
            'description' => 'Projects that support farmers, agriculture recovery, animal husbandry, and food security.',
        ],
        [
            'name' => 'WASH & Environment',
            'description' => 'Projects supporting safe water, sanitation, and healthier living environments.',
        ],
        [
            'name' => 'Disaster Response & Climate Resilience',
            'description' => 'Projects focused on flood response, post-disaster recovery, and resilience in crisis-affected communities.',
        ],
        [
            'name' => 'Social Protection & Community Support',
            'description' => 'Projects supporting elderly people, poor families, marriage assistance, and direct financial or social safety-net support.',
        ],
        [
            'name' => 'Social Inclusion & Rights',
            'description' => 'Projects advancing inclusion, dignity, and economic opportunity for marginalized groups.',
        ],
        [
            'name' => 'Advocacy & Public Awareness',
            'description' => 'Projects centered on public education, awareness campaigns, and behavior change.',
        ],
        [
            'name' => 'Faith-Based Community Development',
            'description' => 'Projects supporting mosques, Madrasahs, sponsorship, Islamic education, and related community welfare initiatives.',
        ],
    ];
}

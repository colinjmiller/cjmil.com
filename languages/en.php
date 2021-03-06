<?php
function t($phrase) {
  static $lang = array(

    'lang' => 'en',

    # Website navigation

    'home' => 'Home',
    'projects' => 'Projects',
    'writing' => "Writing",
    'linkedin' => 'LinkedIn',

    # Portfolio navigation
    
    'portfolio_navigation' => 'Portfolio Navigation',
    'freshman' => 'Freshman',
    'sophomore' => 'Sophomore',
    'junior' => 'Junior',
    'senior' => 'Senior',
    'experiential_learning' => 'Experiential',
    'cool_tech' => 'Cool Tech',
    'back' => 'Back',

    # /

    'home_hi' => "Hi, I'm Colin Miller.",
    'home_about_me' => "I'm a software engineer from Seattle, Washington. I graduated from the University of Washington in Spring, 2015, and currently work at Whitepages. In my professional life, I am passionate about front-end technologies and ensuring the best possible user experience. Outside of work, I have a <a href='/projects/'>variety of personal projects</a> that keep me busy!",

    # Portfolio

    'portfolio_statement_title' => 'A Constant State of Learning',
    'portfolio_p1' => 'The last sixteen years of my life have involved learning. From ages five until thirteen, I learned the basics of life at home under the guidance of my mother. After eighth grade, I went to a public high school and continued my studies in a broad spectrum. Entering college, I believed my trend of learning was coming to a close.',
    'portfolio_p2' => 'This is not the case; I am still learning. I will always be learning.',
    'portfolio_p3' => 'Software Development is an intimidating field to me. All of my co-workers have more experience than me and seem to effortlessly write beautiful code while still finding time to help teach me. Each day, I learn at least five new things.',
    'portfolio_p4' => "Reflecting on that, I'd rather learn five new things each day and feel a little overwhelmed, rather than not learn anything at all. That's where <em>A Constant State of Learning</em> comes into play. A reddit user once asked the question,
        <q>When does the change from, 'This is complicated, I better figure it out!' to 'This is complicated, YOU figure it out!' happen?</q>
        My goal in life is to never make that switch.",
    'portfolio_p5' => 'This portfolio is a culmination of my experiences at the University of Washington. Through it, I wish to reflect on my past so that I can better my future. I began this portfolio in late 2011 and, for the first few quarters, wrote descriptions of every class I took. For posterity, <a href="http://cjmil.com/old/">here\'s a link to the older, more cringey me</a>, complete with a web design from 2012.',
    'switch_language' => 'Change Language',
    'choose_language' => 'Please choose a language',
    'english' => 'View site in English',
    'german' => 'View site in German',
    
    # Freshman Year

    'freshman_year' => 'Freshman Year',
    'freshman_year_summary' => 'Coming across the country from Virginia, the beginning of a new school and new life excited me. I had a limited selection of classes due to taking the last available orientation session, but thorougly enjoyed Dawg Daze and made hundreds of new friends. This was a year of many firsts for me: First girlfriend, first sip of alcohol, and first slap in the face as I realized that grades in college were much harder to maintain than high school. From each quarter, I have picked a class that I felt impacted me in some way.',

    'freshman_autumn' => 'Autumn Quarter, 2011',
    'freshman_winter' => 'Winter Quarter, 2012',
    'freshman_spring' => 'Spring Quarter, 2012',

    'soc_247_title' => 'Sociology 247: Introduction to Social Movements',
    'soc_247_intro' => 'I took this class because I was limited on options and it sounded interesting. It was an interesting class, but everything was overshadowed by my naivety.',
    'soc_247_trip' => "On October 16th, just a few weeks into the quarter, I went to Italy for a week on a scholarship. I had told my professors I would be gone, and they all wished me well on the trip. When I returned, I had a lot of make-up work to complete, but I was glad I had gone on the trip. I had taken hundreds of pictures and my professor in this class was especially interested in the trip. Since his last name was obviously Italian, I didn't think it was weird that he wanted to meet up for coffee at a café so I could show him the pictures from the trip.",
    'soc_247_coffee' => "We sat for around two hours and talked. I thought it was great; I had always been told to get to know faculty members, and here I was, talking with my professor about something unrelated to school! When the meeting was over, we parted ways and I thought that was it. However, that's when he began texting me.",
    'soc_247_flirting' => "At first, I wasn't sure what was going on, but as time went on his intentions became more and more obvious: He was flirting with me. Hard. It began innocently enough, with him asking me about my day, but eventually turned unpleasent. He began talking about his latest bar adventures, who he hooked up with, and how great they were. He also began asking about me. Looking back, I should have done a lot of things differently; at the time I wasn't sure what to do.",
    'soc_247_end' => "Things finally ended when he texted, asking how I was. I replied that I was doing well and had had a chance to hang out with my girlfriend that day. He responded with \"That's great, Colin!\" and I didn't hear from him again.",

    'cse_142_title' => 'CSE 142: Computer Programming I',
    'cse_142_intro' => 'Finally! The first class in my intended major!',
    'cse_142_stuart' => 'Professor Stuart Reges was an inspiring lecturer. His teaching style confused me at first, but I found the pattern after the first few weeks. He would start by introducing a new topic for that lecture, then go down a seemingly random tangent that seems unrelated to the concept from earlier. By the last five minutes of class, I always seemed sure that he had messed up and would require extra time next lecture to wrap up the topic, but I was always wrong. He would reach a point in the tangent that logically looped back to the original concept and clarified everything. Applause was common.',
    'cse_142_grades' => "I had expected the class to be a easy due to my previous experience with CSE. I soon found that only half the class was graded on making homework programs work; the other half was graded on the style of your programming. Since I had self-taught myself everything I knew, learning an entirely new style was difficult and resulted in quite a few lost points along the way. However, this skill is fundamental to computer scientists. Looking back, I'm surprised they didn't incentivize style even more.",
    'cse_142_exams' => "I thought people were joking when I first heard the exams were hand-written. I couldn't believe that a computer science exam at one of the best programs in the world would require students to write code with a pencil and paper. However, it was true. I prepared by doing hundreds of practice questions on the textbook's website until I understood the pattern of questions that Stuart used on exams. I got a a 4.0 in the class.",

    'math_126_title' => 'Math 126: Calculus III',
    'math_126_intro' => 'After acing a very difficult quarter with Math 125, I thought I could take anything the calculus series would throw at me. For the most part, I did well. I had a lot of trouble visualizing 3D math and still have trouble remembering what taking the dot product or cross product of vectors gives me.',
    'math_126_professor' => 'Our lecturer was very particular on day one that she must be addressed as doctor, because she had worked much too hard to be called anything else. She also laid out some other rules, such as no cell phone use, no talking to classmates, and sleeping was discouraged. It reminded me of high school.',
    'math_126_grades' => 'The homework was easier than in Math 125, but I found myself being confused by elementary concepts of the class and it worried me. Nonetheless, I got a 96 on both midterms in the class and I felt assured of a good grade overall.',
    'math_126_chocolates' => "Midway through the year, she called out my friend Tysen and me for talking in class. Our solution was to go to her in person and give her chocolate. We think it worked well; she responded, \"Now that's how you apologize! Everyone else take notes.\" When we were caught talking again, she stopped the lecture and said, \"You two in the back: You'd better have more chocolate.\" We did.",
    'math_126_final' => "The final was the day after my final German 304 play and I didn't start studying until that night. My strategy was to find the hardest homework problems and write down the solutions because time didn't permit for anything else. I got a 74 on the final, which brought my grade crashing from a solid 4.0 to a 3.5.",

    # Sophomore Year

    'sophomore_year' => 'Sophomore Year',
    'sophomore_year_summary' => 'After living with over 100 friends on the Honors floor of Lander 8, it was hard to move to another dorm. However, fears of loneliness subsided when the year began; I roomed with one of my closest friends, Nick Reiter. We became especially close this year and still are to this day. Class-wise, sophomore year was academically disappointing, yielding the lowest grades I have ever received. However, I also began TAing introductory CSE courses this quarter and consider this one of the best decisions of my life at UW. Overall, the year was filled with ups and down and helped me become who I am today.',

    'sophomore_autumn' => 'Autumn Quarter, 2012',

    'phys_121_explanation' => "I took the honors course because physics had always interested me and it would fulfill several requirements. The class content, as a whole, probably wasn't that difficult. The reason I struggled in this class was because of my professor.",
    'phys_121_professor' => "My professor, a nuclear physicist, took pleasure in belittling his students. This sounds harsh, but I'm not exaggerating. When a student had a question, he would scrutinize it and throw it back in their face. Sometimes he would ask people, \"Do you know how to solve this problem?\" and would expect students to simply answer yes or no instead of explaining how it's done.",
    'phys_121_respect' => "My respect for him reached an all-time low near the end of the quarter. We were discussing orbital motion and our professor expected us to answer a clicker question in 90 seconds. The question required the use of formulas we didn't have on hand, so my friend asked him to put them on the board. The professor responded by saying he should be able to derive them from what he knows. We both looked at each other in disbelief. It had taken Kepler 19 years to formulate these equations, and now we were expected to find them and answer a question with them in 90 seconds.",
    'phys_121_grades' => 'I got a 46 on the first midterm, a 71 on the second midterm, and around a 50 on the final. I thought I had failed the class, but I ended up receiving a 3.5. Dozens of students complained to the honors office and we never got to fill out evaluations for the class. It was one of the most frustrating experiences of my college life.',

    # Experiential learning

    'ta_introduction' => 'In the beginning of my second year, I began TAing for the intro series of CSE classes. I regard this as one of my best decisions I made in college.',
    'ta_inspiration' => 'I was inspired to do so by my CSE 143 TA, Galen Knapp. He began every lecture with cheesy jokes to lighten the mood, tried his best to ensure we solidified our knowledge in each section, and was an all-around upstanding guy. At the end of the quarter, he let us know of the undergraduate TAing program in the CS department and recommended many of us to apply.',
    'ta_interviewed' => 'I interviewed in Spring, 2012 and heard back in the summer that I had been selected for the program.',
    'ta_teaching' => 'And so began my love affair with teaching. Every Tuesday (and Thursday, depending on the quarter), I led a 50-minute section devoted to some area of introductory computer science. Time seemed to pass twice as fast during these times; I loved the inquisative questions my louder students asked and enjoyed the challenge of getting the quieter ones to participate, too. Occasionally, questions would arise that challenged my very foundations; these were perhaps my favorite moments because everyone in the class would get something out of it, myself included.',
    'ta_community' => 'Besides the awesome students, the program had an outstanding community. At the time I joined, there were around 30 TAs. By my final quarter, this number had more than doubled. I joined the TA community with a handful of others and we quickly became good friends, grading together over weekends, comparing horror stories, and even hosting TA parties. We all got to experience tutoring students in the Introductory Programming Lab, proctoring and grading exams for an entire day that ended at 2 AM, and answering student e-mails. If we ran into a difficult situation, we could always reach out to anyone else in the community.',
    'ta_positions' => 'I have worked in the TA community for eight quarters now and have gotten to experience a lot of different positions, from a junior TA in my first quarter, to an undergraduate Head TA in my fourth, and now as a TA Tools Developer working behind the scenes.',
    'ta_artifact' => 'As an artifact of this experience, I have included a portion of the review sheet from my final quarter of leading a section. I am very proud of these evaluations.',

    # Cool Tech

    'cool_tech_title' => 'The Cool Tech in this Portfolio',
    'cool_tech_intro' => 'This portfolio is not only an expression of my time at the UW, it is also a playground for technologies that I wanted to try. Here are a few of the cool technologies that I played around with while creating this portfolio:',
    'mobile_first_title' => 'Mobile First Responsive Design',
    'mobile_first_description' => "I designed this portfolio to be a great experience, no matter how you're viewing it. If you on a computer, try scrunching the browser window a bit and you'll see that it's still a great user experience!",
    'sharp_images_title' => 'Sharp Images at Every Level',
    'sharp_images_description' => 'Where possible, I have used Scalable Vector Graphics (SVG) images to ensure they look good on all devices and zoom levels. SVG graphics are drawn by the browser instead of being a static image. This means that no matter how far you zoom in, the edges will always appear sharp and beautiful.',
    'translation_title' => 'Home-brewed Translation',
    'translation_description' => "To avoid bloat, I opted to spin up my own translation system using inspiration from Ruby's i18n system. Behind the scenes, translation documents contain the text of everything on the website in either English or German. Depending on the user's preferences, the server will grab the right document and inject the text in all the right places. To improve performance, these translation documents are cached after the first pass, avoiding expensive network calls."
  );
  return (array_key_exists($phrase, $lang)) ? $lang[$phrase] : $phrase;
}
?>
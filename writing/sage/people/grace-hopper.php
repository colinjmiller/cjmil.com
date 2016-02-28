<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Grace Hopper | Sage Advice") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="sage container">
      <img class="main-img u-light-margin" src="/images/sage/grace_hopper.jpg" alt="" />
      <section class="content-column">
        <header>
          <h1>Grace Hopper</h1>
          <h2>AKA "Amazing Grace"</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2016-2-25">February 25th, 2016</time>.</p>
        </div>
        <div class="introduction">
          <p>
            Grace Hopper: Computing extraordinaire, doctor of mathematics, rear admiral of the Navy, lifelong teacher and learner. I first heard about Grace Hopper during my sophomore year of college; she has since been a personal idol and source of inspiration for the possibilities in life. As a computer scientist with a passion for teaching and son of a career military man, Grace Hopper embodies many of the values that I hold dear in life.
          </p>
        </div>
      </section>
      <section>
        <header>
          <h2>She Made Programming Easier</h2>
        </header>
        <p>
         In modern times, learning to program on a computer is easy enough that it can be self-taught. For those that pursue it, a college degree in computer science will have entire courses dedicated to data structures, algorithms, and architecture taught in a variety of languages and paradigms. For that, we can thank Grace Hopper. In 1952, Grace Hopper invented the first <strong>compiler</strong>, known as A-0. A compiler is a piece of software which can translate human-readable code into a language that the machine can understand.
        </p>
        <p>
          So what could the A-0 compiler do? By today's standards, it was medieval: It provided mathematical subroutines. This means that a computer scientist could now write mathematic code and have it automatically translated into machine code that the computer could process! All the program had to do was look up the relevant function on a separate piece of tape and that mathematical function would be copied over to the program.
        </p>
        <p>
          This event was pivotal in the field because it proved that computers could write their own programs. Grace Hopper was met with resistance to this idea for years, claiming:
        </p>
        <blockquote>
          I had a running compiler and nobody would touch it because, they carefully told me, computers could only do arithmetic; they could not do programs. It was a selling job to get people to try it. I think with any new idea, because people are allergic to change, you have to get out and sell the idea."
          <div class="text-right">
            <cite><a href="http://www.computinghistory.org.uk/det/5487/Grace-Hopper-completes-the-A-0-Compiler/" target="_blank">- Grace Hopper</a></cite>
          </div>
        </blockquote>
        <p>
          The A-0 compiler continued through many iterations and, by 1955, had evolved into B-0, or Flow-Matic, the first programming language to express operations using English-like statements. Grace Hopper was dedicated to breaking down barriers of entry for programmers; the Flow-Matic language transformed the cryptic process of writing computer code by making it more like writing English sentences. Flow-Matic inspired the creation of COBOL, a business-oriented programming language that is still in use today.
        </p>
        <p>
          60 years later, high-level programming languages continue to provide smaller barriers of entry for novice and inexperienced programmers.
        </p>
      </section>
      <section>
        <header>
          <h2>She Challenged Boundaries</h2>
        </header>
        <p>
          Grace Hopper was born in 1906, a time when women's rights in the United States were limited at best. For context, the 19th Amendment to the Constitution was ratified and granted women the right to vote in federal elections when Grace Hopper was 14 years old. She challenged the role of women in society by pursuing mathematics and physics degrees at Vassar College when she turned 17 and continued her education by obtaining a master's degree and PhD in mathematics at Yale. Despite her doctorate in mathematics, it was unlikely she would ever teach at a level beyond high school due to her gender. Vassar College hired her on as an instructor of mathematics and, by 1941, promoted her to associate professor.
        </p>
        <p>
          In 1943, Grace Hopper obtained a leave of absence in order to help the US Navy during World War II by joining <strong>Women Accepted for Volunteer Emergency Service</strong>, or WAVES, a women's branch of the United States Naval Reserve. Despite failing to meet the weight requirements for the Navy, Grace Hopper trained and graduated at the top of her class, finishing with the rank of Lieutenant, Junior Grade. She began work at the Bureau of Ships Computation PRoject at Harvard University, where she worked on the Mark I as a programmer.
        </p>
        <p>
          After the war, the 38-year-old Grace Hopper requested to be transferred from the reserve to the regular Navy, but was denied due to her age. Although she was offered a full professorship at Vassar, she turned down the offer in favor of continuing work in the Naval Reserve as a researcher as Harvard.
        </p>
        <p>
          In 1966, Commander Grace Hopper was forced to retire at age 60. However, she was recalled to active duty in 1967 and again in 1972 to serve as the director of the Navy Programming Languages Group. For her work, she was promoted to Captain in 1973 and Rear Admiral (Commodore at the time) in 1983. In 1986, she was forced to retire a final time and, at 79 years old, was the oldest active duty naval officer.
        </p>
      </section>
      <section>
        <header>
          <h2>She Made Programming Relatable</h2>
        </header>
        <p>
          Grace Hopper is famous for using telephone wire to explain why efficiency is so important in computer programs. The earliest computers were nowhere near as fast as modern technology, but they were a significant jump in speed when compared to manual calculations by a human. The earliest computer scientists were, therefore, some of the first to think of operations in terms of thousandths, millionths, and billionths of a second. As a young scientist, Hopper found working in terms of billionths of a second, nanoseconds, to be too abstract for her or any of her coworkers to understand. To better understand, she calculated the maximum distance that electrons could travel in a billionth of a second, approximately 11.8 inches, and carried around a piece of telephone wire cut to that length as a reminder.
        </p>
        <p>
          During talks, Hopper would hand each audience member a foot-long piece of telephone wire that represented one nanosecond. If a high-ranking military official would ask her why it took so long for satellite messages to come in, she would ask them to picture each nanosecond lined back-to-back as it travels to the satellite and back. When talking with computer scientists, she would also bring in a representation of a microsecond, a 984-foot piece of telephone wire, to remind them why efficiency is so important in their work.
        </p>
        <p>
          Grace Hopper is also famous for popularizing the terms <strong>bug</strong> and <strong>debugging</strong>. While working on the Mark II at Harvard University, Hopper's colleagues discovered a moth inside the machine that was causing issues. While the term "bug" had been in use for decades before this, Grace Hopper famously remarked that they were "debugging" the machine, and that terminology is still used today.
        </p>
      </section>
      <section>
        <header>
          <h2>And She Continues to Inspire</h2>
          <p>
            Grace Hopper died in 1992, but continues to live on through her life's work. She is a reminder of what is possible in the face of adversity. Her name is used for the largest conference of women in computing: <strong>The Grace Hopper Celebration of Women in Computing</strong>, which provides a forum for women in computing to share their experiences in a male-dominated profession.
          </p>
          <p>
            For her lifetime of contributions to computing and her fight against sexism, Grace Hopper will remain a personal source of inspiration.
          </p>
        </header>
      </section>
    </article>
<?= View::footer_logic(false) ?>
<?php

  require_once("{$_SERVER['DOCUMENT_ROOT']}/view-logic/views.php");

?>
<?= View::header_logic("Grace Hopper | Sage Advice", "Grace Hopper: Computing extraordinaire, doctor of mathematics, rear admiral of the Navy, lifelong teacher and learner.") ?>
  <?= View::navigation_bar("Writing") ?>
    <article class="sage container">
      <section class="u-cf">
        <img class="main-img u-light-margin" src="/images/sage/grace_hopper_full.jpg" alt="" />
        <header>
          <h1>Grace Hopper</h1>
          <h2>AKA "Amazing Grace"</h2>
        </header>
        <div class="publication-times">
          <p>Published <time datetime="2016-3-13">March 13th, 2016</time>.</p>
        </div>
        <div class="introduction">
          <p>
            Grace Hopper: Computing extraordinaire, doctor of mathematics, rear admiral of the Navy, lifelong teacher and learner. She embodies many of the values that I, as both a computer scientist with a passion for teaching and the son of a career military man, hold dear in life. Grace Hopper became a personal idol and source of inspiration for me when I first heard about her during my sophomore year of college.
          </p>
        </div>
      </section>
      <section>
        <header>
          <h2>She Challenged Boundaries</h2>
        </header>
        <p>
          Grace Hopper was born in 1906, a time when women's rights in the United States were limited at best. For context, Grace Hopper was 14 years old when the 19th Amendment to the Constitution was ratified and granted women the right to vote in federal elections. When she turned 17, she challenged the role of women in society by not only pursuing mathematics and physics degrees at Vassar College, but continuing her education and obtaining a master's degree and PhD in mathematics at Yale. After graduating, Hopper applied for a teaching position at her undergraduate college. Vassar College hired her on as an instructor of mathematics and, by 1941, promoted her to associate professor. At this time, professors were almost exclusively men. Women could expect to teach no higher than a high school level, so Hopper's ascension to a professorship was both unusual and a testament to her brilliance.
        </p>
        <figure class="pull-right-desktop">
          <img  src="/images/sage/grace_hopper_young.jpg" alt="" />
          <figcaption>Grace Hopper as a young naval officer</figcaption>
        </figure>
        <p>
          In 1943, Grace Hopper obtained a leave of absence in order to help the US Navy during World War II. She joined <strong>Women Accepted for Volunteer Emergency Service</strong>, or WAVES, a women's branch of the United States Naval Reserve. Despite failing to meet the weight requirements for the Navy, Grace Hopper gained a special waiver and graduated at the top of her class, finishing with the rank of Lieutenant, Junior Grade. She began work at the Bureau of Ships Computation Project at Harvard University, where she worked as a programmer for an electro-mechanical computer, the legendary <a href="http://www.britannica.com/technology/Harvard-Mark-I" target="_blank">Mark I</a>.
        </p>
        <p>
          After the war, the 38-year-old Grace Hopper requested to be transferred from the reserve to the regular Navy, but was denied due to her age. Although she was offered a full professorship at Vassar, she turned down the offer in favor of continuing work in the Naval Reserve as a researcher at Harvard. She joined the team developing the UNIVAC I as a senior mathematician. While there, she developed one of the most important inventions in programming history.
        </p>
      </section>
      <section>
        <header>
          <h2>She Made Programming Easier</h2>
        </header>
        <p>
         In 1952, Grace Hopper invented the first <strong>compiler</strong>, known as A-0. A compiler is a piece of software which can translate human-readable code into a language that the machine can understand.
        </p>
        <p>
          The A-0 compiler had limited functionality: It provided mathematical subroutines. Compared to the error-prone practice of rewriting mathematical functions, a programmer could now write code with mathematical notation! The compiler would automatically translate the notation into a language that the computer could understand. All the program had to do was search for the relevant function on a separate piece of tape and copy the logic over.
        </p>
        <p>
          This event was pivotal in the field because it proved that computers could write their own programs, and yet Grace Hopper was met with resistance to this idea for years, claiming:
        </p>
        <blockquote>
          I had a running compiler and nobody would touch it because, they carefully told me, computers could only do arithmetic; they could not do programs. It was a selling job to get people to try it. I think with any new idea, because people are allergic to change, you have to get out and sell the idea."
          <div class="text-right">
            <cite><a href="http://www.computinghistory.org.uk/det/5487/Grace-Hopper-completes-the-A-0-Compiler/" target="_blank">- Grace Hopper, 1952</a></cite>
          </div>
        </blockquote>
        <p>
          The A-0 compiler continued through many iterations and, by 1955, had evolved into B-0, or Flow-Matic, the first programming language to express operations using English-like statements. Grace Hopper was dedicated to breaking down barriers of entry for programmers; the Flow-Matic language transformed the cryptic process of writing computer code by making it more like writing English sentences. Flow-Matic inspired the creation of COBOL, a business-oriented programming language that is still in use today.
        </p>
        <figure>
          <div class="row">
            <div class="six columns">
              <img src="/images/sage/conventional-computer-code.png" alt="Conventional computer code" />
            </div>
            <div class="six columns">
              <img src="/images/sage/flow-matic-code.png" alt="Flow-matic computer code" />
            </div>
          </div>
          <figcaption class="text-center">An <a href="http://archive.computerhistory.org/resources/text/Remington_Rand/Univac.Flowmatic.1957.102646140.pdf" target="_blank">advertisement for Flow-Matic</a> showing example code written conventionally and using Flow-Matic.</figcaption>
        </figure>
      </section>
      <section>
        <header>
          <h2>She Made Programming Relatable</h2>
        </header>
        <figure class="pull-left-desktophd hidden-xs">
          <iframe width="427" height="240" src="https://www.youtube.com/embed/JEpsKnWZrJ8" frameborder="0" allowfullscreen></iframe>
          <figcaption>Watch: Grace Hopper's Nanoseconds</figcaption>
        </figure>
        <p>
          Grace Hopper is famous for using telephone wire to explain why efficiency is so important in computer programs. The earliest computers were nowhere near as fast as modern technology, but they were a significant jump in speed when compared to manual calculations by a human. The earliest computer scientists were some of the first to think of operations in terms of thousandths, millionths, and billionths of a second. As a young scientist, Hopper found working in terms of billionths of a second (nanoseconds) to be too abstract for her or any of her coworkers. To better understand, she calculated the maximum distance that electrons could travel in a billionth of a second, approximately 11.8 inches, and carried around a piece of telephone wire cut to that length as a reminder.
        </p>
        <p>
          During talks, Hopper would hand each audience member a foot-long piece of telephone wire that represented one nanosecond. If a high-ranking military official asked her why it took so long for satellite messages to come in, she would ask them to picture each nanosecond lined end-to-end as it traveled to the satellite and back. When talking with computer scientists, she would also bring in a representation of a microsecond, a 984-foot piece of telephone wire, to remind them how much time they are losing when they waste even a microsecond with bad code.
        </p>
        <p>
          Grace Hopper is also famous for popularizing the terms <strong>bug</strong> and <strong>debugging</strong>. While working on the Mark II at Harvard University, Hopper's colleagues discovered a moth inside the machine that was causing issues. While the term "bug" had been in use for decades before this, Grace Hopper famously remarked that they were "debugging" the machine, and that terminology is still used today.
        </p>
      </section>
      <section>
        <header>
          <h2>Retirement &amp; Legacy</h2>
        </header>
        <p>
          Grace Hopper retired from the Navy a total of three times. After being forced to leave in 1966 due to her age, she was recalled to active duty in 1967 for six months to help standardize communication between different computing languages, which turned into an indefinite assignment until her second retirement in 1971. In 1972, she was again recalled to active duty to serve as the director of the Navy Programming Languages Group. For her work, Hopper received a number of awards including, ironically, the Computer Science Man-of-the-Year Award from the Data Processing Management Association.
        </p>
        <p>
          In 1986, the 79-year-old Grace Hopper retired a final time. She finished her naval career with a rank of Rear Admiral and the prestige of being the oldest currently active duty naval officer.
        </p>
        <p>
          Grace Hopper died in 1992. Today, her name is used for one of the largest computing conferences: <a href="http://ghc.anitaborg.org/" target="_blank">The Grace Hopper Celebration of Women in Computing</a>, which provides a forum for women to share their experiences in a male-dominated profession. Grace Hopper is regarded as one of the greatest programmers in the field of computing, but when asked what her most significant contribution had been, she replied, "all the young people I've trained."
        </p>
      </section>
      <section>
        <header>
          <h3>Sources &amp; Additional Reading
        </header>
        <ul>
          <li><a href="http://www.cs.yale.edu/homes/tap/Files/hopper-story.html" target="_blank">Grace Murray Hopper - yale.edu</a></li>
          <li><a href="http://www.biography.com/people/grace-hopper-21406809" target="_blank">Grade Hopper Biography - biogrpahy.com</a></li>
          <li><a href="http://www.britannica.com/technology/Harvard-Mark-I" target="_blank">The Harvard Mark I - britannica.com</a></li>
          <li><a href="http://www.computinghistory.org.uk/det/5487/Grace-Hopper-completes-the-A-0-Compiler/" target="_blank">Grace Hopper completes the A-0 Compiler - computinghistory.org.uk</a></li>
          <li><a href="http://archive.computerhistory.org/resources/text/Remington_Rand/Univac.Flowmatic.1957.102646140.pdf" target="_blank">Introducing a new language for automatic programming: Univac Flow-Matic - The Remington Rand Univac Advertisement</a></li>
          <li><a href="http://www.computerworld.com/article/2515435/app-development/moth-in-the-machine--debugging-the-origins-of--bug-.html" target="_blank">Moth in the machine: Debugging the origins of the 'bug' - computerworld.com</a></li>
          <li><a href="http://ghc.anitaborg.org/" target="_blank">The Grade Hopper Celebration of Women in Computing conference</a></li>
          <li><a href="https://www.youtube.com/watch?v=JEpsKnWZrJ8" target="_blank">Grace Hopper's Nanoseconds - youtube.com</a></li>
        </ul>
      </section>
    </article>
<?= View::footer_logic(false) ?>
<?php
function t($phrase) {
  static $lang = array(
    'portfolio_statement_title' => 'Ständiges Lernen',
    'portfolio_p1' => 'Lernen wird eine große Rolle in den letzten 16 Jahren gespielt. Als ich fünf bis dreizehn war, lernte ich alles zu Hause von meiner Mutter. Nach der achten Klasse, ging ich zur Highschool. Beim Eintragen der Universität, glaubte ich, dass das Lernen fast zum Schluss wäre.',
    'portfolio_p2' => 'Das trifft nicht zu; ich lerne jetzt und immer.',
    'portfolio_p3' => 'Software-Entwicklung ist eine einschüchternde Sparte. Meine Mitarbeiter sind erfahrener als mich und programmiern schönen Code den ganzen Tag. Trotdem finden sie noch Zeit, um mich zu lehren. Jeden Tag lerne ich mindestens fünf neue Dinge.',
    'portfolio_p4' => "Reflecting on that, I'd rather learn five new things each day and feel a little overwhelmed, rather than not learn anything at all. That's where <em>A Constant State of Learning</em> comes into play. A reddit user once asked the question,
        <q>When does the change from, 'This is complicated, I better figure it out!' to 'This is complicated, YOU figure it out!' happen?</q>
        My goal in life is to never make that switch.",
    'portfolio_p5' => 'This portfolio is a culmination of my experiences at the University of Washington. Through it, I wish to reflect on my past so that I can better my future. I began this portfolio in late 2011 and, for the first few quarters, wrote descriptions of every class I took. However, the things I wrote have caused my present self to cringe, so I have opted to disclude many of those samples and edit those that remain. For posterity, <a href="http://cjmil.com/old/">here\'s a link to the older, more cringey me</a>, complete with a web design from 2012.',
    'portfolio_p6' => "If I'm being realistic with myself, I will look back on the things I wrote here and cringe again when I'm more mature.",
    'switch_language' => 'Sprache ändern',
    'choose_language' => 'Bitte wählen Sie eine Sprache',
    'english' => 'Englisch',
    'german' => 'Deutsch'
  );
  return (array_key_exists($phrase, $lang)) ? $lang[$phrase] : $phrase;
}
?>
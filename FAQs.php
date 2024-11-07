<?php
//Template Name: FAQs
include_once "components/about_block/about_block.php";
class RenderFAQsPage
{
  public function __construct()
  {
    get_header();
?>
    <main class="main">
      <div class="main__wrapper">
        <?php
        render_about_block("FAQs", "Dog Training & Breeding Professionals");
        $this->render_questions_block();
        $this->render_more_questions_block();
        ?>
      </div>
    </main>
  <?php
    get_footer();
  }
  public function render_more_questions_block()
  {
  ?>
    <div class="more-questions">
      <div>
        <div class="more-questions__sub-title">
          <div class="line"></div>
          More Questions
        </div>
        <h2>Do you have any other questions?</h2>
        <p class="more-questions__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a consequat
          purus, facilisis iaculis
          nulla. Mauris vel leo bibendum, imperdiet justo a, pharetra metus. </p>
        <div class="more-questions__socials">
          <div class="more-questions__social">
            <div class="more-questions__social-image"><i class="fas fa-phone-volume"></i></div>
            <div class="more-questions__social-data">
              <p>Call Anytime </p>
              <p>(800) 123-45789</p>
            </div>
          </div>
          <div class="more-questions__social">
            <div class="more-questions__social-image"><i class="far fa-envelope"></i></div>
            <div class="more-questions__social-data">
              <p>Write Email</p>
              <p>help@yourcompany.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="steps-involved">
        <div class="steps-involved__first">
          <div class="steps-involved__step">
            <span>What steps are involved?</span>
            <span><i class="fas fa-plus"></i></span>
          </div>
          <div class="steps-involved__step-description">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Ut elit
            tellus, luctus nec
            ullamcorper mattis, pulvinar dapibus leo. Cras rhoncus rutrum odio, et egestas massa tincidunt et.
          </div>
        </div>
        <div class="steps-involved__second">
          <div class="steps-involved__step">
            <span>How long does the adoption take?</span>
            <span><i class="fas fa-plus"></i></span>
          </div>
          <div class="steps-involved__step-description">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Ut elit
            tellus, luctus nec
            ullamcorper mattis, pulvinar dapibus leo. Cras rhoncus rutrum odio, et egestas massa tincidunt et.
          </div>
        </div>
        <div class="steps-involved__third">
          <div class="steps-involved__step">
            <span>Pet adoption discount for veterans?</span>
            <span><i class="fas fa-plus"></i></span>
          </div>
          <div class="steps-involved__step-description">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Ut elit
            tellus, luctus nec
            ullamcorper mattis, pulvinar dapibus leo. Cras rhoncus rutrum odio, et egestas massa tincidunt et.
          </div>
        </div>
        <div class="steps-involved__fourth">
          <div class="steps-involved__step">
            <span>Pet adoption discount for seniors?</span>
            <span><i class="fas fa-plus"></i></span>
          </div>
          <div class="steps-involved__step-description">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Ut elit
            tellus, luctus nec
            ullamcorper mattis, pulvinar dapibus leo. Cras rhoncus rutrum odio, et egestas massa tincidunt et.
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  public function render_questions_block()
  {
  ?>
    <div class="questions">
      <div class="questions__first">
        <img src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/dog-P228UWM.jpg" alt="">
        <div class="questions__first-information">
          <div class="questions__number">
            <div class="line"></div>
            Question #2
          </div>
          <h2>Where can I go to adopt a pet?</h2>
          <p class="questions__text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
            luctus nec ullamcorper
            mattis, pulvinar dapibus leo.</p>
          <p class="questions__text-2">Eam ad sale persius, id vis iudicabit cor rumpit. Usu ad modo illum
            assum.</p>
          <ul>
            <li><i class="fas fa-bone"></i>Lorem ipsum dolor sit amet, consectetur</li>
            <li>
              <i class="fas fa-bone"></i>No delenit detracto eum, vix ne integre taci
            </li>
            <li><i class="fas fa-bone"></i>An pro facete dicuntei ut epicuri</li>
          </ul>
        </div>
      </div>
      <div class="questions__second">
        <div class="questions__second-information">
          <div class="questions__number">
            <div class="line"></div>
            Question #1
          </div>
          <h2>Can I take my new pet home the same day?</h2>
          <p class="questions__text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
            luctus nec ullamcorper
            mattis, pulvinar dapibus leo.</p>
          <p class="questions__text-2">Eam ad sale persius, id vis iudicabit cor rumpit. Usu ad modo illum
            assum.</p>
          <ul>
            <li><i class="fas fa-bone"></i>Lorem ipsum dolor sit amet, consectetur</li>
            <li>
              <i class="fas fa-bone"></i>No delenit detracto eum, vix ne integre taci
            </li>
            <li><i class="fas fa-bone"></i>An pro facete dicuntei ut epicuri</li>
          </ul>
        </div>
        <img src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/beagle-sitting-and-panting-isolated-on-white-URVM7PC.jpg"
          alt="">
      </div>
    </div>
<?php
  }
}
new RenderFAQsPage();
?>
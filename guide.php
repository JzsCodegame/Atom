<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Automation Playground Guide</title>
  <link rel="stylesheet" href="automation_playground.css">
</head>
<body>
  <div class="container">
    <div class="nav"><a href="/index.php">Home</a></div>
    <h1 id="guide-title" data-testid="guide-title">Automation Playground: Guide & Functionalities</h1>

    <section class="panel" id="guide-overview" data-testid="guide-overview">
      <h2>Overview</h2>
      <p>This website is a deterministic UI playground built for Selenium/WebDriver framework validation.</p>
      <p>Each module maps to a specific interaction pattern (forms, alerts, windows, date/time, uploads, tables, and visual checks) and exposes stable selectors for automation.</p>
    </section>

    <section class="panel" id="guide-modules" data-testid="guide-modules">
      <h2>Available Modules</h2>
      <ul>
        <li><strong>/signup.php</strong>: end-to-end registration form with deterministic success message.</li>
        <li><strong>/actions.php</strong>: counter increment, dropdown selection, and autosuggest input behavior.</li>
        <li><strong>/alerts.php</strong>: JavaScript alert + confirm handling with static messages.</li>
        <li><strong>/datepicker.php</strong>: date/time picker and ISO-formatted output for assertions.</li>
        <li><strong>/upload.php</strong>: native file upload input and deterministic upload result text.</li>
        <li><strong>/windows.php</strong>: parent page opening two child windows for handle switching tests.</li>
        <li><strong>/tables.php</strong>: stable table rows and cells for extraction/assertion flows.</li>
        <li><strong>/visual.php</strong>: visual baseline element and toggleable diff mode.</li>
      </ul>
    </section>

    <section class="panel" id="guide-selector-contract" data-testid="guide-selector-contract">
      <h2>Selector Contract</h2>
      <p>Use <code>id</code> as the primary locator and <code>data-testid</code> as secondary where available.</p>
      <p>Selectors and response messages are intentionally stable to reduce flaky tests.</p>
    </section>

    <section class="panel" id="guide-next-steps" data-testid="guide-next-steps">
      <h2>Recommended Next Steps</h2>
      <ol>
        <li>Create Page Object classes for each module route and centralize locators.</li>
        <li>Add happy-path and negative-path tests for each module.</li>
        <li>Add CI to run tests on every push (e.g., GitHub Actions with headless Chrome).</li>
        <li>Add optional reset/seed endpoints if you move beyond static module data.</li>
      </ol>
    </section>
  </div>
</body>
</html>

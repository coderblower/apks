@extends('admin.layouts.master')
@section('content')
        <div class="content pt-5">
          <h2 class="mb-2 lh-sm">Tables</h2>
          <p class="text-700 lead mb-2">Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.</p><a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.1/content/tables/" target="_blank">Tables on Bootstrap<span class="ms-1" data-feather="chevron-right"></span></a>
          <div class="mt-4">
            <div class="row g-4">
              <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Overview</h3>
                        <p class="mb-0 mt-2 text-800">Due to the widespread use of <code>&lt;table&gt;</code> elements across third-party widgets like calendars and date pickers, Bootstrap’s tables are <strong>opt-in</strong>. Add the base class <code>.table</code> to any <code>&lt;table&gt;</code>, then extend with our optional modifier classes or custom styles. All table styles are not inherited in Bootstrap, meaning any nested tables can be styled independent from the parent.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#overview-code" role="button" aria-controls="overview-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="overview-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Variants</h3>
                        <p class="mb-0 mt-2 text-800">Use contextual classes to color tables, table rows or individual cells.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#variants-code" role="button" aria-controls="variants-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="variants-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;Class&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;Default&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-primary&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Primary&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-secondary&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Secondary&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-success&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Success&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-danger&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Danger&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-warning&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Warning&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-info&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Info&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-light&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Light&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class=&quot;table-dark&quot;&gt;
      &lt;th scope=&quot;row&quot;&gt;Dark&lt;/th&gt;
      &lt;td&gt;Cell&lt;/td&gt;
      &lt;td&gt;Cell&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Class</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Default</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-primary">
                            <th scope="row">Primary</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-secondary">
                            <th scope="row">Secondary</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-success">
                            <th scope="row">Success</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-danger">
                            <th scope="row">Danger</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-warning">
                            <th scope="row">Warning</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-info">
                            <th scope="row">Info</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-light">
                            <th scope="row">Light</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-dark">
                            <th scope="row">Dark</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <h2 class="mt-6" data-anchor>Accented tables</h2>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Striped rows</h3>
                        <p class="mb-0 mt-2 text-800">Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>. <code>.table-striped</code> also works in table variants</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#striped-rows-code" role="button" aria-controls="striped-rows-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="striped-rows-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table table-striped&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
&lt;h4 class=&quot;mt-4 mb-3&quot;&gt;Table Dark&lt;/h4&gt;
&lt;table class=&quot;table table-striped table-dark&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
&lt;h4 class=&quot;mt-4 mb-3&quot;&gt;Table Success&lt;/h4&gt;
&lt;table class=&quot;table table-striped table-success&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4 class="mt-4 mb-3">Table Dark</h4>
                      <table class="table table-striped table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4 class="mt-4 mb-3">Table Success</h4>
                      <table class="table table-striped table-success">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Hoverable rows</h3>
                        <p class="mb-0 mt-2 text-800">Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>. These hoverable rows can also be worked with <code>.table-dark</code> and combined with the strped variant.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#hoverable-rows-code" role="button" aria-controls="hoverable-rows-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="hoverable-rows-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table table-hover&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
&lt;h4 class=&quot;mt-4 mb-3&quot;&gt;Table Dark&lt;/h4&gt;
&lt;table class=&quot;table table-hover table-dark&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
&lt;h4 class=&quot;mt-4 mb-3&quot;&gt;Table striped&lt;/h4&gt;
&lt;table class=&quot;table table-hover table-striped&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4 class="mt-4 mb-3">Table Dark</h4>
                      <table class="table table-hover table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4 class="mt-4 mb-3">Table striped</h4>
                      <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Active tables</h3>
                        <p class="mb-0 mt-2 text-800">Highlight a table row or cell by adding a <code>.table-active</code> class.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#active-tables-code" role="button" aria-controls="active-tables-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="active-tables-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr class=&quot;table-active&quot;&gt;&lt;/tr&gt;
    &lt;tr&gt;&lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td class=&quot;table-active&quot; colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-active"></tr>
                          <tr></tr>
                          <tr>
                            <th scope="row">3</th>
                            <td class="table-active" colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <h2 class="mt-6" data-anchor>Table Borders</h2>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Bordered tables</h3>
                        <p class="mb-0 mt-2 text-800">Add <code>.table-bordered</code> for borders on all sides of the table and cells. <a href="/docs/5.1/utilities/borders/#border-color">Border color utilities</a> can be added to change colors.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#bordered-tables-code" role="button" aria-controls="bordered-tables-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="bordered-tables-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table table-bordered&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
&lt;h4 class=&quot;mt-4 mb-3&quot;&gt;Border utility class&lt;/h4&gt;
&lt;table class=&quot;table table-bordered border-primary&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4 class="mt-4 mb-3">Border utility class</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Table without borders</h3>
                        <p class="mb-0 mt-2 text-800">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#table-without-borders-code" role="button" aria-controls="table-without-borders-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="table-without-borders-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table table-bordered&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
&lt;h4 class=&quot;mt-4 mb-3&quot;&gt;Table Dark&lt;/h4&gt;
&lt;table class=&quot;table table table-dark table-borderless&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4 class="mt-4 mb-3">Table Dark</h4>
                      <table class="table table table-dark table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Small Tables</h3>
                        <p class="mb-0 mt-2 text-800">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#small-tables-code" role="button" aria-controls="small-tables-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="small-tables-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;table class=&quot;table table-sm&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <h2 data-anchor>Responsive Tables</h2>
                <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table</code> with <code>.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code>.table-responsive{-sm|-md|-lg|-xl|-xxl}</code>.</p>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Always responsive</h3>
                        <p class="mb-0 mt-2 text-800">Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling tables.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#always-responsive-code" role="button" aria-controls="always-responsive-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="always-responsive-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border border-300 my-5" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-end">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Breakpoint specific</h3>
                        <p class="mb-0 mt-2 text-800">Use <code>.table-responsive{-sm|-md|-lg|-xl|-xxl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.</p>
                      </div>
                      <div class="col col-md-auto">
                        <nav class="nav nav-underline justify-content-end border-0 doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-900 copy-code-btn" type="button">
                            <div class="fas fa-copy me-1"></div>Copy Code
                          </button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#breakpoint-specific-code" role="button" aria-controls="breakpoint-specific-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="breakpoint-specific-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;table-responsive table-reponsive-sm&quot;&gt;
  &lt;table class=&quot;table&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Mark&lt;/td&gt;
        &lt;td&gt;Otto&lt;/td&gt;
        &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Jacob&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
        &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="p-4 code-to-copy">
                      <div class="table-responsive table-reponsive-sm">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-2">
                <div class="position-sticky" style="top: 80px;">
                  <h5 class="lh-1">On this page</h5>
                  <hr class="text-300">
                  <ul class="nav nav-vertical flex-column doc-nav">
                    <li class="nav-item"><a class="nav-link" href="#overview">Overview</a></li>
                    <li class="nav-item"><a class="nav-link" href="#variants">Variants</a></li>
                    <li class="nav-item"><a class="nav-link" href="#accented-tables">Accented tables</a>
                      <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#striped-rows">Striped rows</a></li>
                        <li class="nav-item"><a class="nav-link" href="#hoverable-rows">Hoverable rows</a></li>
                        <li class="nav-item"><a class="nav-link" href="#active-tables">Active tables</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#table-borders">Table Borders</a>
                      <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#bordered-tables">Bordered tables</a></li>
                        <li class="nav-item"><a class="nav-link" href="#table-without-borders">Table without borders</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#small-tables">Small Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="#responsive-tables">Responsive Tables</a>
                      <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#always-responsive">Always responsive</a></li>
                        <li class="nav-item"><a class="nav-link" href="#breakpoint-specific">Breakpoint specific</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix <span class="d-none d-sm-inline-block">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.0.0</p>
              </div>
            </div>
          </footer>
        </div>
    @endsection
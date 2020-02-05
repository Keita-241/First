<!DOCTYPE html>
<html lang="jp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>タスク管理アプリ</title>
    <meta name="description" content="組織において全体での、そして個人としてのタスク漏れを防ぎ、メンバーのタスクを把握できるタスク管理アプリです。">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="copy.css">
    <script src="copy.js" defer></script>
  </head>
  <body class="bg-light">
  <div id="l-wrapper">
  <div class="container-fluid">
    <header class="header">
      <h1　class="headerTitle">タスク管理APP</h1>
    </header>
    <div class="row mainContainer">
      <div class="col-md-8 col-xl-9 taskContainer">
        <div id="stage"></div>
        <div class="taskFormContainer bg-dark">
          <form name="taxkForm" id="js-taskForm">
            <div class="container-fluid py-3">
              <div class="row">
                <div class="col-xl-5 mb-2 mb-xl-0">
                  <div class="mb-1 small text-white">
                    内容<span class="badge badge-danger ml-2">※必須</span>
                  </div>
                  <div>
                    <input type="text" name="content" value="form-control" required placeholder="タスクを入力してください。">
                  </div>
                </div>
                <div class="col-xl row">
                  <div class="col-sm-auto col-md-auto col-xl">
                    <div class="mb-1 small text-white">優先度
                      <span class="badge badge-danger ml-2">※必須</span>
                    </div>
                    <div class="text-white">
                      <label class="custom-control custom-radio">
                        <input type="radio" name="priority" value="3" class="custom-control-input" required>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">高</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input type="radio" name="priority" value="2" class="custom-control-input" checked>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">中</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input type="radio" name="priority" value="1" class="custom-control-input" checked>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">低</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-auto col-sm-auto col-xl mb-3 mb-sm-0">
                    <div class="mb-1 small text-white">期限</div>
                    <input type="date" name="limit" class="form-control">
                  </div>
                  <div class="col-sm-auto col-lg col-xl align-self-center">
                    <input type="submit" class="btn btn-primary mb-1" value="追加">
                    <input type="reset" class="btn btn-secondary mb-1" value="クリア">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-mb-4 col-xl-3">
        <div class="sticky-top">
          <div class="statusBox mb-4 mb-md-5" id="js-statusBox">
            <table class="table table-bordered">
              <tr>
                <th>現在のタスク総数</th>
                <td><span class="totalCount">0</span>個</td>
              </tr>
              <tr>
                <th>完了済みタスク数</th>
                <td><span class="small">0</span>個
                  <div class="taskDeleteBtn js-none">

                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </body>
</html>

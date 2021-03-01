pipeline {
    agent any
    triggers {
        // 毎日22時に実行（変更箇所）
        pollSCM('H/15 * * * *')
    }
    // 環境変数を設定します
    environment {
        //Gitlabのプロジェクトのgit URL　（変更箇所）
        SCMURL = 'https://github.com/xieheng0915/test-php-coverage.git'
    }
    // 処理
    stages {
        // ビルド
        stage('checkout') {
            steps {
                // ソースのチェックアウト
                git url: SCMURL
            }
        }

        // ユニットテスト実行
	    /*
        stage('test-phing') {
            steps {
                // composerのユニットテストイベントを呼び出す
                sh 'phing'
            }
        }*/

        // 静的解析の実行
        stage('sonar-scanner') {
            steps {
                // sonar-scanner->jenkins server reboot -> sonar-scanner
                sh '/opt/sonar-scanner/bin/sonar-scanner '
            }
        }

        
        
    }
    post {
        // stagesの処理が成功した場合に実行する処理
        success {
            // ワークスペースをクリーン
            cleanWs()
        }
    }
}
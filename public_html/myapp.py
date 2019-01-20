#!/var/www/myapp/public_html/venv/bin/python3.4
from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def hello_world():
    return render_template("index.html")


@app.route('/test')
def test():
    return 'Routing'

if __name__ == '__main__':
    app.run()


#!/var/www/myapp/public_html/venv/bin/python3.4
import sys
sys.path.append('/var/www/myapp/public_html/venv/lib/python3.4/site-packages')

from flup.server.fcgi import WSGIServer

from myapp import app


if __name__ == '__main__':
    WSGIServer(app).run()

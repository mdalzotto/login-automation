FROM python:3.10

WORKDIR /app

COPY python/requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY python/login_automation.py .
COPY python/chromedriver /usr/local/bin/chromedriver

RUN chmod +x /usr/local/bin/chromedriver

CMD ["sh", "-c", "python login_automation.py; tail -f /dev/null"]
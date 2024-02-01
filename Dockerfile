FROM node:lts-alpine3.17

ENV SERVER_HOST='0.0.0.0' \
    SERVER_PORT='5000'

WORKDIR /app
COPY ./package*.json .
RUN npm ci
COPY . .
EXPOSE 5000
CMD ["npm", "run", "dev", "--host=0.0.0.0"]
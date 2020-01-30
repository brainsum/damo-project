ARG BASE_IMAGE_TAG

FROM wodby/drupal-php:$BASE_IMAGE_TAG

USER root

RUN apk add --update --no-cache \
    && apk add ffmpeg \
    && rm -rf \
      /var/cache/apk/*

USER wodby

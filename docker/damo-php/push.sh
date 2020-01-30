#!/usr/bin/env bash

IMAGE_TAG=$(cat ./version.txt);
IMAGE="brainsum/damo-php:${IMAGE_TAG}"

echo "Pushing tag: ${IMAGE}"

docker push "${IMAGE}"

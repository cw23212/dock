FROM debian:latest
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    build-essential \
    python \
    python3-dev \
    python-pip \
    python3-pip \
    python3-setuptools \ 
    htop \
    vim \
    wget \
        && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*
    
RUN pip3 --no-cache-dir install \
        wheel \
        ipykernel \
        jupyter \
        && \
    python3 -m ipykernel.kernelspec
RUN mkdir /root/work
COPY .jupyter/ /root/.jupyter
COPY start.sh /
EXPOSE 80
WORKDIR /root
CMD /start.sh
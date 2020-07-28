#FROM ubuntu
#RUN apt update
#RUN apt install -y curl net-tools build-essential python3 python3-pip locales
#RUN curl -fOL https://github.com/cdr/code-server/releases/download/v3.4.1/code-server_3.4.1_amd64.deb
#RUN dpkg -i code-server_3.4.1_amd64.deb
#WORKDIR /root
#CMD code-server --bind-addr 0.0.0.0:8080 --auth none .
#apt install gdb

FROM vscode:1
RUN echo 'export LC_CTYPE=en_US.UTF-8' >> .bashrc && echo 'export LC_MESSAGES=en_US.UTF-8' >> .bashrc && echo 'export LC_ALL=en_US.UTF-8' >> .bashrc

CMD code-server --bind-addr 0.0.0.0:8080 --auth none .
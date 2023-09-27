# chamados-inas - Sistema de Gerenciamento de Chamados UTIC - INAS 

**Montando ambiente de desenvolvimento
 - Instale o git: https://github.com/git-guides/install-git;
     - Abra o terminal/PowerShell e execute o git clone do projeto;
     <pre>comando: git clone https://github.com/JotaDF/chamados-inas.git</pre>
 
 - Instale o docker: https://docs.docker.com/get-docker/
     - Passos para habilitar/atualizar o WSL 2 (Caso necessário)
         - Habilitar o Subsistema do Windows para Linux
           <pre>dism.exe /online /enable-feature /featurename:Microsoft-Windows-Subsystem-Linux /all /norestart</pre>
         - Definir o WSL 2 como a sua versão padrão
           <pre>wsl --set-default-version 2</pre>
         - Baixar o pacote de atualização do kernel do Linux
           <pre>wsl --update</pre>
     - copie a pasta "docker" do projeto para seu diretorio workspace(exemplo: "Documents");
     - Abra o terminal/PowerShell e acesso a pasta "docker" do seu workspace e execute o docker-compose;
     <pre>comando: docker-compose up -d --build</pre>
     
 - Instale o VSCode: https://code.visualstudio.com/download
     - Copie a pasta "projeto" para a pasta "www/html" criada dentro da pasta "docker"
   
 - Instale o MySql Workbench: https://dev.mysql.com/downloads/workbench/
     - Crie uma conexão para criar as tabelas do banco de dados:
        <pre>senha: root;
        schema: chamados;</pre>
     - Após conectar, abra o arquivo com o script de criação das tabelas na pasta "db" do peojeto e execute.
 
**Tudo pronto para começar a desenvolver!! Mão a obra! 

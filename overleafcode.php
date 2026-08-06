\documentclass[10pt, letterpaper]{article}

% ---------- Packages ----------
\usepackage[top=1.7cm, bottom=1.7cm, left=2cm, right=2cm]{geometry}
\usepackage{cmap} % ensures correct text extraction / no dropped ligature letters
\usepackage[T1]{fontenc}
\usepackage[utf8]{inputenc}
\usepackage{lmodern}
\usepackage{titlesec}
\usepackage{enumitem}
\usepackage{hyperref}
\usepackage{xcolor}
\usepackage{parskip}
\usepackage{iftex}

% ---------- Guarantee correct glyph-to-unicode mapping for ATS parsers ----------
\ifPDFTeX
\input{glyphtounicode}
\pdfgentounicode=1
\fi

% ---------- Basic setup ----------
\pagestyle{empty}
\setlength{\parindent}{0pt}
\hypersetup{
colorlinks=true,
urlcolor=black,
linkcolor=black,
pdftitle={Syed Musharaf A - Resume},
pdfauthor={Syed Musharaf A}
}

% ---------- Section heading style: bold, small caps look, rule underneath ----------
\titleformat{\section}{\bfseries\large}{}{0pt}{}[\vspace{2pt}\hrule\vspace{4pt}]
\titlespacing{\section}{0pt}{10pt}{4pt}

% ---------- Tight bullet list ----------
\newenvironment{tightitemize}{
\begin{itemize}[leftmargin=14pt, itemsep=2pt, topsep=2pt, parsep=0pt, label=\textbullet]
}{
\end{itemize}
}

% ---------- Job entry: title -- date, plain inline (ATS-safe, no columns) ----------
\newcommand{\jobheader}[2]{%
  \noindent\textbf{#1} --- \textbf{#2}\par
}

\begin{document}

% ---------------- HEADER ----------------
\begin{center}
    {\LARGE \textbf{SYED MUSHARAF A}}\\[3pt]
    {\large HR Administration \& Finance Professional}\\[6pt]
    Dubai, UAE | +971 564268547 | syedmusharaf936@gmail.com |
    \href{https://linkedin.com/in/syed-musharaf-a-56475a208}{www.linkedin.com/in/syed-musharaf-a-56475a208} |
    \href{https://syedmusharaf09.github.io/syedmusharaf.github.io/}{syedmusharaf09.github.io}
\end{center}

% ---------------- PROFESSIONAL SUMMARY ----------------
\section{PROFESSIONAL SUMMARY}
MBA graduate (HR \& Finance) with 5+ years of experience in HR Operations, General Accounting, and Insurance Operations across the UAE and India. Experienced in employee lifecycle management, payroll support, accounts payable/receivable, reconciliations, maintaining general ledger, and financial documentation. Proficient in Oracle HCM, HRIS, Tally ERP, Fresa, and Microsoft Office tools. Recognized for maintaining more than 90\% accuracy, ensuring regulatory compliance, and collaborating effectively with cross-functional teams to deliver efficient HR, financial, and administrative support in fast-paced environments.

% ---------------- CORE SKILLS ----------------
\section{CORE SKILLS}
\textbf{Keywords:} Oracle HCM, HRIS, Tally ERP, Fresa, Accounts Payable, Accounts Receivable, General Ledger, Bank Reconciliation, Financial Reporting, VAT Support, Payroll Support, Employee Lifecycle Management, Claims Processing, Policy Administration, Renewals, Endorsements, MS Excel, Pivot Tables, VLOOKUP, XLOOKUP, MS Office

\vspace{4pt}
\begin{tightitemize}
    \item \textbf{HR Systems \& Functions:} Oracle HCM, HRIS, Employee Lifecycle Management, Onboarding \& Offboarding, Payroll Support, Benefits Administration, Attendance Management.
    \item \textbf{Accounting Systems \& Functions:} Tally ERP, Fresa, Accounts Payable (AP), Accounts Receivable (AR), General Ledger (GL) Maintenance, Bank Reconciliation, Financial Reporting, VAT Support, Financial Documentation.
    \item \textbf{Insurance Operations:} Claims Processing, Policy Administration, Renewals Management, Mid-Term Adjustments.
    \item \textbf{Technical Skills:} Microsoft Excel (XLOOKUP, VLOOKUP, Pivot Tables, Dashboards), Microsoft Word, PowerPoint, Outlook.
    \item \textbf{Professional Skills:} Leadership, Communication, Analytical Thinking, Problem Solving, Attention to Detail, Time Management, Team Collaboration, Multitasking, Confidentiality, Compliance.
\end{tightitemize}

% ---------------- PROFESSIONAL EXPERIENCE ----------------
\section{PROFESSIONAL EXPERIENCE}

\jobheader{General Accountant}{Feb 2025 -- Present}
Marakish Express Cargo | Dubai, UAE
\begin{tightitemize}
    \item Process invoices, journal entries, and financial transactions while ensuring compliance with company policies and UAE accounting standards.
    \item Maintain and reconcile the General Ledger (GL), ensuring the accuracy and integrity of financial records and supporting financial reporting.
    \item Manage end-to-end Accounts Payable (AP) and Accounts Receivable (AR), including invoice verification, payment processing, customer collections, and vendor account reconciliation.
    \item Prepare bank reconciliations and support month-end and year-end closing activities by maintaining accurate financial documentation and reconciliation schedules.
    \item Assist in the preparation of financial reports, keeping records and documentation to support management decision-making.
    \item Collaborate with senior accountants and cross-functional departments to streamline accounting workflows, improve operational efficiency, and ensure timely financial processing.
\end{tightitemize}

\vspace{4pt}
\jobheader{Process Associate -- US HR Operations}{May 2022 -- May 2024}
Eurofins (BPO) India Pvt Ltd | Bengaluru, India
\begin{tightitemize}
    \item Managed the end-to-end employee lifecycle for US employees, including onboarding, job transitions, offboarding, and termination processing for 100+ employee cases while ensuring compliance with organizational policies.
    \item Maintained, audited, and updated employee records, attendance, and HRIS databases, achieving 100\% data accuracy, confidentiality, and compliance.
    \item Served as the primary HR point of contact for US-based employees, resolving HR-related inquiries, policy clarifications, and employee requests while delivering a high level of customer service.
    \item Supported payroll administration, benefits administration, leave management, and employee data validation in accordance with company policies and US labor requirements.
    \item Developed and maintained Standard Operating Procedures (SOPs), generated HR reports and dashboards, and provided accurate workforce data to support leadership decision-making and process improvements.
\end{tightitemize}

\vspace{4pt}
\jobheader{Sr. Transaction Processing Officer}{Oct 2019 -- Jan 2022}
Mphasis Ltd | Bengaluru, India
\begin{tightitemize}
    \item Supported UK Motor and UAE Property insurance operations by processing policy quotations, renewals, endorsements, and mid-term adjustments while ensuring adherence to client and regulatory requirements.
    \item Managed confidential policy documentation and customer records, maintaining data accuracy, security, and compliance with organizational standards.
    \item Served as the primary point of contact for policyholders, resolving inquiries, providing policy-related support, and delivering high-quality customer service.
    \item Processed insurance claims efficiently and accurately, ensuring timely settlement in accordance with established procedures and service-level agreements (SLAs).
    \item Performed claims reconciliation and policy validation to maintain financial data integrity, achieving and consistently maintaining more than 90\% processing accuracy.
\end{tightitemize}

% ---------------- KEY ACHIEVEMENTS ----------------
\section{KEY ACHIEVEMENTS}
\begin{tightitemize}
    \item Maintained more than 90\% processing accuracy across HR operations, financial transactions, reconciliations, and insurance processing while ensuring compliance with organizational standards.
    \item Delivered technical training and knowledge transfer sessions for new team members, reducing onboarding time and improving process understanding and productivity.
    \item Identified and implemented process improvements across HR, accounting, and insurance operations, enhancing workflow efficiency while maintaining data accuracy and regulatory compliance.
    \item Collaborated effectively with HR, Finance, and Operations teams to resolve complex operational issues, streamline processes, and improve service delivery.
    \item Consistently maintained high standards of confidentiality, data integrity, and documentation accuracy when handling employee, financial, and insurance records.
\end{tightitemize}

% ---------------- EDUCATION ----------------
\section{EDUCATION}
\jobheader{Master of Business Administration (MBA), HR \& Finance}{2017 -- 2019}
PPG Business School, Coimbatore (Anna University)

\vspace{4pt}
\jobheader{Bachelor of Commerce (BCom), Computer Application}{2014 -- 2017}
Erode Arts and Science College, Erode (Bharathiar University)

% ---------------- CERTIFICATIONS ----------------
\section{CERTIFICATIONS}
\begin{tightitemize}
    \item Tally ERP 9 --- Professional Certification in digital financial accounting, ledger maintenance, and corporate financial reporting.
    \item MBA Research Project: Employee Safety \& Welfare (Penta Auto Equipments Pvt Ltd) --- employee surveys, stakeholder interviews, statistical analysis.
    \item MBA Summer Internship --- Malabar Cements Ltd, cross-departmental operational analysis (Finance, Marketing, Production, Procurement, Logistics).
\end{tightitemize}

% ---------------- LANGUAGES ----------------
\section{LANGUAGES}
English, Hindi, Tamil, Malayalam, Urdu

\end{document}